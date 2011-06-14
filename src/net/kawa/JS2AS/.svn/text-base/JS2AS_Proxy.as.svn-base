/*
 * JS2AS_Proxy.as - JavaScript/ActionScript Interface Proxy Class
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

package net.kawa.JS2AS {

    import flash.external.ExternalInterface;
	import net.kawa.JS2AS.JS2AS_Item;
	
    public class JS2AS_Proxy {

		// singleton
		private static var _instance:JS2AS_Proxy;
		public static function getProxy():JS2AS_Proxy {
			if ( ! _instance ) {
				_instance = new JS2AS_Proxy();
			}
			return _instance;
        }

        // private properties 
        private var _constructors:Array;
        private var _items:Array;
		private var _count:int = 0;
 
        // constructor for the proxy itself
        public function JS2AS_Proxy() {			
			if ( _instance != null ) { 
				throw new Error( "JS2AS is a singleton." );
			}
			_constructors = new Array();
			_items = new Array();
            ExternalInterface.addCallback( 'create', this.create );
            ExternalInterface.addCallback( 'call',   this.call );
            ExternalInterface.addCallback( 'setter', this.setter );
            ExternalInterface.addCallback( 'getter', this.getter );
            ExternalInterface.addCallback( 'drop',   this.drop );
        }

        // regist constructor
        public function regist( cname:String, cfunc:Function ):void {
			this._constructors[cname] = cfunc;
        }

        // call constructor
        private function create():int {
            var args:Array = [];
            args.push.apply( args, arguments );
            var cname:String = args.shift();
			this._count ++;
			var id:int = this._count;
            try {
				var func:Function = this._constructors[cname];
				var item:JS2AS_Item = new JS2AS_Item( func );
				item.create.apply( item, args );
				this._items[id] = item;
            } catch ( e:Error ) {
                this._err( 'create ' + cname + ' failed: ' + e.message );
            }
            return id;
        }

        // call method
        private function call( id:int, ... args:Array ):* {
            var item:JS2AS_Item = this._items[id];
            if ( ! item ) {
                this._err( 'item not found: ' + id );
                return null;
            }
			var method:String;
			var ret:*;
            try {
				method = args[0];
				ret = item.call.apply( item, args );
            } catch ( e:Error ) {
                this._err( 'call ' + method + ' failed: ' + e.message );
            }
            return ret;
        }

        // property setter
        private function setter( id:int, key:String, val:* ):Boolean {
            var item:JS2AS_Item = this._items[id];
            if ( ! item ) {
                this._info( 'item not found: ' + id );
				return false;
			}
            try {
				if ( item.getType(key) == 'function' && typeof val == 'string' ) {
					var that:JS2AS_Proxy = this;
					var jsfunc:String = val;
					val = function ( ... args ):void {
						args.unshift( jsfunc );
						that._call_javascript.apply( that, args );
					};
				}
				item.setter( key, val );
            } catch ( e:Error ) {
                this._err( 'setter failed: ' + e.message );
				return false;
            }
			return true;
        }

        // property getter
        private function getter( id:int, key:String ):* {
            var item:JS2AS_Item = this._items[id];
            if ( ! item ) {
                this._info( 'item not found: ' + id );
                return null;
            }
            var ret:*;
            try {
				ret = item.getter( key );
            } catch ( e:Error ) {
                this._err( 'getter failed: ' + e.message );
            }
            return ret;
        }

        // drop item
        private function drop( id:int ):int {
            this._items[id].drop();
			delete this._items[id];
			return id;
        }

		// message to javascript console
		private function _err( mess:String ):void {
            ExternalInterface.call( "(function(m){window.console?console.error(m):alert(m);})",mess );
        }
		private function _info( mess:String ):void {
            ExternalInterface.call( "(function(m){if(window.console)console.log(m);})",mess );
        }

		// javascript callback
        private function _call_javascript( ... args ):void {
			try {
	            ExternalInterface.call.apply( null, args );
			} catch (e:Error) {
				this._err( 'callback failed: ' + e.message );
			}
        }
    }
}
