s = open("steg7.txt", encoding="utf-8").read()
bin_str = ""
for ch in s:
    if ch == "\u200B": bin_str += "0"  # Zero-width space
    elif ch == "\u200C": bin_str += "1"  # Zero-width non-joiner
# split into bytes
flag = "".join([chr(int(bin_str[i:i+8], 2)) for i in range(0, len(bin_str), 8)])
print(flag)
