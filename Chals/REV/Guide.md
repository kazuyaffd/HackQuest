# Reversing Tools Guide

## **Essential file-inspection tools**
These are the first commands you should run on any unknown binary.

### File Command
```
-> file

What: Identifies file type (ELF, PE, 32/64-bit, PIE, stripped).

Why: Helps choose the right toolchain (32 vs 64-bit) and expectations (PIE = addresses randomized).

Example: file challenge1

```

### Strings Command
```
-> strings

What: Extracts printable ASCII/Unicode sequences from a file.

Why: Quick way to find hardcoded passwords, messages, or flags. Always run first.

Example: strings challenge1 | grep -i FLAG

```

### Hexdump Command
```
-> hexdump / xxd

What: Show binary bytes in hex.

Why: Useful when you need to locate an encoded blob or inspect raw bytes near an offset.

Example: xxd -g 1 challenge3 | less
```

### ldd Command
```
-> ldd

What: Shows shared library dependencies (Linux).

Why: Useful for dynamic binaries to understand runtime requirements.

Example: ldd ./challenge1
```

### Objdump Command
```
-> objdump -d / gobjdump

What: Disassemble sections of an ELF binary.

Why: See low-level instructions, where constants are used, and follow control flow.

Example: objdump -d challenge2 | less then search for cmp or constants like 50.
```

## **Python Oneliners**
-> python3 / one-liners
Quick decoders and keygens. Example: XOR-decode bytes.
```py
data = bytes([27,6,4,0,3,75])
print(bytes(b ^ 75 for b in data))
```

-> XOR Decode
```py
data = bytes([27,6,4,0,3,75])
print(bytes(b ^ 75 for b in data))
```

-> Compute Serial
```py
username = 'alice'
serial = sum(ord(c) for c in username) * 2
print(serial)
```
-> Brute Force
```py
for i in range(0,256):
if (i*3+5)==50:
print(i)
```

