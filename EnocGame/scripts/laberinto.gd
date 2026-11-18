extends Control

@onready var back_btn: Button = $VBox/BackButton
@onready var play_btn: Button = $MenuButtons/PlayButton
@onready var options_btn: Button = $MenuButtons/OptionsButton
@onready var quit_btn: Button = $MenuButtons/QuitButton

func _ready() -> void:
	back_btn.pressed.connect(func(): get_tree().change_scene_to_file("res://scenes/main_menu.tscn"))
	play_btn.pressed.connect(func(): pass)  # Placeholder: ir a la primera era
	options_btn.pressed.connect(func(): pass)
	quit_btn.pressed.connect(func(): get_tree().quit())
