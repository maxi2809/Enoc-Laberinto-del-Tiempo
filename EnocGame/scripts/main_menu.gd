extends Control

@onready var key: TextureRect = $Key
@onready var door: TextureRect = $Door
@onready var hint: Label = $Hint

var entering: bool = false
var time_acc: float = 0.0

func _ready() -> void:
	pass

func _process(delta: float) -> void:
	if entering:
		return
	time_acc += delta
	# Llave levemente inclinada, con un balanceo suave (efecto 3D)
	key.rotation = 0.22 + sin(time_acc * 0.9) * 0.12
	key.scale.y = 0.88 + 0.12 * (0.5 + 0.5 * sin(time_acc * 1.4))
	# Destello para indicar "presiona para iniciar"
	var glow := 1.0 + 0.55 * (0.5 + 0.5 * sin(time_acc * 3.0))
	key.modulate = Color(glow, glow * 0.92, 0.6, 1.0)
	hint.modulate.a = 0.55 + 0.45 * (0.5 + 0.5 * sin(time_acc * 2.2))

func _input(event: InputEvent) -> void:
	if entering:
		return
	if event is InputEventKey and event.pressed and not event.echo:
		if event.is_action_pressed("ui_cancel"):
			_on_quit()
			return
		_start()
	elif event is InputEventMouseButton and event.pressed:
		_start()

func _start() -> void:
	entering = true
	var tw := create_tween()
	tw.tween_property(key, "rotation", key.rotation + TAU * 2.0, 1.0).set_trans(Tween.TRANS_CUBIC)
	tw.tween_property(door, "scale:x", 0.06, 0.6).set_trans(Tween.TRANS_BACK).set_ease(Tween.EASE_IN)
	tw.tween_property(door, "modulate:a", 0.0, 0.4)
	tw.tween_callback(func(): get_tree().change_scene_to_file("res://scenes/laberinto.tscn"))

func _on_quit() -> void:
	get_tree().quit()
