<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use App\Components\MenuRecusive;
use Illuminate\Support\Str;

class MenuController extends Controller
{
    private $menuRecusive;
    private $menu;

    public function __construct(MenuRecusive $menuRecusive, Menu $menu){
        $this->menuRecusive = $menuRecusive;
        $this->menu = $menu;
    }

    public function index(){
        $menus = $this->menu->paginate(10);
        return view('menus.index', compact('menus'));
    }

    public function create(){
        $optionSelect = $this->menuRecusive->menuRecusiveAdd();
        return view('menus.add', compact('optionSelect'));
    }

    public function store(Request $request){
        $this->menu->create([
            'name' => $request->name,
            'parent_id' => $request->parent_id,
            'slug' => Str::slug($request-> name)
        ]);
        return redirect()->route('menus.index');
    }

    public function edit($id, Request $request){
        $optionSelect = $this->menuRecusive->menuRecusiveAdd();
        return view('menus.edit', compact('optionSelect'));
    }
}
