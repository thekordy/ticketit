<?php

namespace Kordy\Ticketit\Models;

use Cache;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model {

	protected $fillable = ['lang', 'slug', 'value', 'default'];
	protected $table = 'ticketit_settings';

	public function scopeBySlug($query, $slug) {
		return $query->whereSlug($slug);
	}

	public function grab($slug) {

		$settings = Cache::remember('settings', 30, function () {
			return Setting::all();
		});

		$slug = str_replace('ticketit.', '', $slug);
		$setting = $settings->where('slug', $slug)->first();

		if ($setting->lang) {
			return $value->lang;
		}

		if ($setting->value) {
			return $setting->value;
		}

		return $setting->default;

	}

}