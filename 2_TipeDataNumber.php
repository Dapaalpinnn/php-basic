<?php

// ada dua jenis tipe data number (Integer dan floating point) 

echo "Decimal: ";
var_dump(1344); // Decimal: int(1344)

echo "Octal: ";
var_dump(01234); // Decimal: int(1344)

echo "Hexadecimal: ";
var_dump(0x1A); // Decimal: int(1344)

echo "Binary: ";
var_dump(0b111111); // Decimal: int(1344)

echo "Underscore: ";
var_dump(1_200_00); // Decimal: int(1344)

// Floating Point
echo "Floating Point: ";
var_dump(1.234);

echo "Floating Point dengan E notation : (1.7 x 1000)"; 
var_dump(1.2e3);

echo "Floating Point dengan E notation minus: (1.7 x 0.001)";
var_dump(7e-3);

echo "Underscore di floating point: ";
var_dump(1_123.123);