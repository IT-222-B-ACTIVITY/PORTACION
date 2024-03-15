<?php

class UnitConverter {
    public function convert($value, $fromU, $toU) {
        switch ($fromU) {
            case 'gram':
                switch ($toU) {
                    case 'pound':
                        return $value * 0.00220462;
                    case 'ounce':
                        return $value * 0.035274;
                    case 'kilogram':
                        return $value * 0.0010000010787;
                    default:
                        return "Unsupported conversion: $fromU to $toU";
                }
            case 'pound':
                switch ($toU) {
                    case 'gram':
                        return $value * 453.592;
                    case 'ounce':
                        return $value * 15.9999869488;
                    case 'kilogram':
                        return $value * 0.45359200000470384362;
                    default:
                        return "Unsupported conversion: $fromU to $toU";
                }
            case 'ounce':
                switch ($toU) {
                    case 'pound':
                        return $value * 0.0625;
                    case 'gram':
                        return $value * 28.3495;
                    case 'kilogram':
                        return $value * 0.028349500000294;
                    default:
                        return "Unsupported conversion: $fromU to $toU";
                }
            case 'kilogram':
                switch ($toU) {
                    case 'pound':
                        return $value * 2.20462;
                    case 'ounce':
                        return $value * 35.274;
                    case 'gram':
                        return $value * 1000;
                    default:
                        return "Unsupported conversion: $fromU to $toU";
                }
            default:
                return "Unsupported conversion: $fromU to $toU";
        }
    }
}

$converter = new UnitConverter();
$result = $converter->convert(20, 'kilogram', 'gram');
echo "Result: $result";

?>