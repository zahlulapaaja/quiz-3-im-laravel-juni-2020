<?php 

namespace App\Models;
use Illuminate\Support\Facades\DB;

class ArtikelModel
{
	public static function get_all() {
		$artikel = DB::table('artikel')->get();
		return $artikel;
	}

	public static function save($data) {
		$slug = $data["judul"];
		$slug = strtolower("$slug");
		$slug = explode(" ",$slug);
		$slug = implode("-",$slug);
		$data["slug"] = $slug; //edit dulu formatnya
		$new_artikel = DB::table('artikel')->insert($data);
		return $new_artikel;
	}

	public static function get_by_id($id) {
		$artikel = DB::table('artikel')->where('id', $id)->first();
		return $artikel;
	}

	public static function update($id, $data) {
		$data["slug"] = $data["judul"]; //edit dulu formatnya
		$artikel = DB::table('artikel')
						->where('id', $id)
						->update([
							'judul' => $data['judul'],
							'isi' => $data['isi'],
							'slug' => $data['slug'],
							'tag' => $data['tag'],
							'user_id' => $data['user_id']
						]);
		return $artikel;
	}

	public static function destroy($id) {
		$deleted = DB::table('artikel')
						->where('id', $id)
						->delete();
		return $deleted;
	}



}