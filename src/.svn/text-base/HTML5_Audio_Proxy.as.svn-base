/*
 * HTML5_Audio_Proxy.as - HTML5-like Audio Class Interface for JavaScript
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

    import flash.display.Sprite;
	import net.kawa.JS2AS.JS2AS_Proxy;
    import HTML5_Audio;
	
    public class HTML5_Audio_Proxy extends Sprite {
		private var _bridge:JS2AS_Proxy;
		
        public function HTML5_Audio_Proxy() {
			this._bridge = JS2AS_Proxy.getProxy();	// singleton
			var func:Function = function( url:String ):HTML5_Audio {
                return new HTML5_Audio( url );
            }
			this._bridge.regist( 'HTML5_Audio', func );
        }
	}
}
