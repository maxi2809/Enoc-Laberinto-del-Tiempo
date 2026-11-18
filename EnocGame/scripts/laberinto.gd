extends Control

@onready var back_btn: Button = $VBox/BackButton

func _ready() -> void:
	back_btn.pressed.connect(func(): get_tree().change_scene_to_file("res://scenes/main_menu.tscn"))
