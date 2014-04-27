<?php

class Model extends Eloquent {

	public $timestamps = false;
	protected $fillable = array('faction_id', 'type', 'name', 'points', 'field_allowance', 'parent_id', 'expansion');

	public static function boot() {
		parent::boot();

		static::creating(function($model) {
			$model->slug = Str::slug($model->name);
		});
	}

	public function faction() {
		return $this->belongsTo('Faction');
	}
}

?>