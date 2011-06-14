/*
 * JS2AS_Item.as - JavaScript/ActionScript Interface Item Class
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
	
    public class JS2AS_Item {

        // private properties
		private var _constructor:Function;	// constructor
        private var _item:*;				// instance container
		
        // constructor 
        public function JS2AS_Item( func:Function ) {
			this._constructor = func;
		}

        // call constructor
        public function create():JS2AS_Item {
            this._item = this._constructor.apply( null, arguments );
            return this;
        }

        // call method
        public function call( method:String, ... args:Array ):* {
            return this._item[method].apply( this._item, args );
        }

        // property setter
        public function setter( key:String, val:* ):JS2AS_Item {
			this._item[key] = val;
			return this;
        }

        // property getter
        public function getter( key:String ):* {
			return this._item[key];
        }

        // getType
        public function getType( key:String ):String {
			return typeof this._item[key];
        }

        // drop item
        public function drop():void {
			this._constructor = null;
			this._item = null;
        }
    }
}
