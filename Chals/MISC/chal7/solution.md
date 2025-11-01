# Solution — Anagram

## Challenge
Unscramble `htis_slagf_si_easy` to form the flag.

## Steps
1. Look for likely words inside the scrambled string:
   - `htis` → likely `this`
   - `slagf` → `flags` or `flag s` → reorder to `flag`
   - `si` → `is`
   - `easy` → `easy`

2. Reordering gives: `this_flag_is_easy`

3. Wrap in the required format:`CTF{this_flag_is_easy}`

## Flag
```
CTF{this_flag_is_easy}
```

## What you learned
- Breaking an anagram: find short words first and test reorders.
- Practical tip: underscores often separate words in CTF flags.