# Solution — JSON Key Hunt

## Challenge
A JSON object contains a top-level key holding the flag.

Given JSON:
```json
{
  "name": "Alice",
  "role": "student",
  "secret_flag": "CTF{json_is_easy}",
  "meta": {"year":2025}
}
```

## Steps
1. Inspect the JSON visually or using a tool.
2. The secret_flag key holds the flag: `"secret_flag"`: `"CTF{json_is_easy}"`


## Flag
```
CTF{json_is_easy}
```

## What you learned
- JSON is structured and easy to parse.
- Look at keys that hint at secrets (secret, flag, token).