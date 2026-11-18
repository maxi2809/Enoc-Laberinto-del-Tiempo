extends Control

@onready var key: TextureRect = $Key
@onready var door: TextureRect = $Door
@onready var play_btn: Button = $Buttons/PlayButton
@onready var options_btn: Button = $Buttons/OptionsButton
@onready var quit_btn: Button = $Buttons/QuitButton

var entering: bool = false

func _ready() -> void:
	play_btn.pressed.connect(_on_play)
	options_btn.pressed.connect(_on_options)
	quit_btn.pressed.connect(_on_quit)

func _process(delta: float) -> void:
	if not entering:
		key.rotation += delta * 1.2

func _on_play() -> void:
	if entering:
		return
	entering = true
	var tw := create_tween()
	tw.tween_property(key, "rotation", key.rotation + TAU * 2.0, 1.2).set_trans(Tween.TRANS_CUBIC)
	tw.tween_property(door, "scale:x", 0.08, 0.6).set_trans(Tween.TRANS_BACK).set_ease(Tween.EASE_IN)
	tw.tween_property(door, "modulate:a", 0.0, 0.4)
	tw.tween_callback(func(): get_tree().change_scene_to_file("res://scenes/laberinto.tscn"))

func _on_options() -> void:
	# Placeholder: abrir panel de opciones
	pass

func _on_quit() -> void:
	get_tree().quit()
