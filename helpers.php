<?php

if(!function_exists('menu')){
    function menu($key){
        return \TomatoPHP\TomatoMenus\Models\Menu::where('key', $key)
            ->with('menusItems')
            ->first()?->menusItems()->orderBy('order', 'asc')->get() ?: [];
    }
}
