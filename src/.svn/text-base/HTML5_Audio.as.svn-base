/* 
 * HTML5_Audio.as - HTML5-like Audio Class
 * Copyright (c) 2009 Yusuke Kawasaki http://www.kawa.net/
 * 
 * Permission is hereby granted, free of charge, to any person
 * obtaining a copy of this software and associated documentation
 * files (the "Software"), to deal in the Software without
 * restriction, including without limitation the rights to use,
 * copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the
 * Software is furnished to do so, subject to the following
 * conditions:
 * 
 * The above copyright notice and this permission notice shall be
 * included in all copies or substantial portions of the Software.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
 * EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES
 * OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
 * NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT
 * HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY,
 * WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
 * FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR
 * OTHER DEALINGS IN THE SOFTWARE.
 * 
 */

package {

	import flash.events.Event;
	import flash.external.ExternalInterface;
	import flash.media.Sound;	
	import flash.media.SoundChannel;
	import flash.media.SoundTransform;
	import flash.net.URLRequest;

    public class HTML5_Audio extends Object {
		
		// private properties
		private var _sound:Sound;
		private var _sndChannel:SoundChannel;
		private var _sndTransform:SoundTransform;
		private var _endTime:Number = 0;
		
		// public properties
		public var currentTime:Number = 0; // sec
		public var volume:Number = 1.0; // 0.0 to 1.0
		public var paused:Boolean = true;
		public var ended:Boolean  = false;
		public var loop:Boolean   = false;
		public var duration:Number;
		
		// event hooks
		public var onloadstart:Function = function ():void {};
		public var onload:Function		= function ():void {};
		public var onplay:Function		= function ():void {};
		public var onpause:Function		= function ():void {};
		public var onended:Function		= function ():void {};

		// constructor
        public function HTML5_Audio( url:String ) {
			this._sound = new Sound();
            this._sound.addEventListener(Event.OPEN, this._onLoadStart);
            this._sound.addEventListener(Event.COMPLETE, this._onLoad);
			this._sndTransform = new SoundTransform(this.volume);
			var req:URLRequest = new URLRequest( url );
			this._sound.load( req );
		}
		
		private function _info( mess:String ):void {
            ExternalInterface.call( "(function(m){if(window.console)console.log(m);})",mess );
        }

		// methods
		public function play():Boolean {
			if ( this._sndChannel ) {
				this._sndChannel.stop();
				this._sndChannel = null;
			}
			if ( this.currentTime == this._endTime ) {
				this.currentTime = 0;						// rewind
			}
			var pos:Number = this.currentTime * 1000.0;
			var loops:int = this.loop ? 1000 : 0;			// loop flag means 1000 times
			this._sndTransform.volume = this.volume;
			this._sndChannel = this._sound.play( pos, loops, this._sndTransform );
            this._sndChannel.addEventListener(Event.SOUND_COMPLETE, this._onEnded);
			this.ended  = false;
			this.paused = false;
			if ( this.onplay is Function ) this.onplay();
			return ! ! this._sndChannel;
		}
		
		public function pause():Boolean {
			if ( this._sndChannel ) {
				this.currentTime = this._sndChannel.position / 1000.0;
				this._sndChannel.stop();
				this._sndChannel = null;
				if ( this.onpause is Function ) this.onpause();
			}
			this.paused = true;
			return true;
		}
		
		// events
		private function _onLoadStart(e:Event):void {
			if ( this.onloadstart is Function ) this.onloadstart();
		}
		private function _onLoad(e:Event):void {
			this.duration = this._sound.length / 1000.0;
			if ( this.onload is Function ) this.onload();
		}
		private function _onEnded(e:Event):void {
			if ( this._sndChannel ) {
				this.currentTime = this._sndChannel.position / 1000.0;
			} else {
				this.currentTime = 0;
			}
			this._endTime = this.currentTime;
			this._sndChannel = null;
			this.ended  = true;
			this.paused = true;
			if ( this.onended is Function ) this.onended();
		}
    }
}
