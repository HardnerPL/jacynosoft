<?php

function get_property($object, $property, $default = "missing_property") {
	if (isset($object->{$property})) {
		return $object->{$property};
	}
	return $default;
}
