<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Kategori;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $menu = Menu::get();

        return view("menu.index", ["data" => $menu]);
    }

    public function tambah()
    {
        $kategori = Kategori::get();

        return view("menu.form", ["kategori" => $kategori]);
    }

    public function simpan(Request $request)
    {
        $data = [
            "nama_menu" => $request->nama_menu,
            "id_kategori" => $request->id_kategori,
            "harga" => $request->harga,
        ];

        if ($request->hasFile("image")) {
            $fileName = time() . "." . $request->image->extension();
            $request->image->storeAs("public/images", $fileName);
            $data["image"] = $fileName;
        }

        Menu::create($data);

        return redirect()->route("menu");
    }
    public function category($id)
    {
        $menu = Menu::where("id_kategori", $id)->get();

        return view("menu.category", ["data" => $menu]);
    }

    public function views($id)
    {
        $menu = Menu::find($id);

        return view("menu.views", ["menu" => $menu]);
    }

    public function edit($id)
    {
        $menu = Menu::find($id);
        $kategori = Kategori::get();

        return view("menu.form", ["menu" => $menu, "kategori" => $kategori]);
    }

    public function update($id, Request $request)
    {
        $data = [
            "nama_menu" => $request->nama_menu,
            "id_kategori" => $request->id_kategori,
            "harga" => $request->harga,
        ];

        if ($request->hasFile("image")) {
            $fileName = time() . "." . $request->image->extension();
            $request->image->storeAs("public/images", $fileName);
            $data["image"] = $fileName;
        }

        Menu::find($id)->update($data);

        return redirect()->route("menu");
    }

    public function hapus($id)
    {
        Menu::find($id)->delete();

        return redirect()->route("menu");
    }
}
