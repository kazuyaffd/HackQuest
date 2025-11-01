# Challenge 3 – Audio Spectrogram

## 📝  How to Solve
1. Download the audio file.  
2. Open it in an audio tool that supports spectrogram visualization:
   - **Audacity** (free) or **Sonic Visualiser**.

3. In **Audacity**:
   - `File → Open → steg3.wav`.
   - Click the track name (left of waveform) → choose **Spectrogram** (or use the display mode dropdown).
   - Open **Spectrogram Settings** and adjust:
     - Window size: `2048` or `4096`.
     - Frequency range: min `~200 Hz`, max `~8000 Hz`.
     - Gain/Range: increase range if text is faint.

4. Read the letters formed by the bright/dark patterns across time. The spectrogram visually spells the flag.

## Flag: 
```c
CTF{hidden_in_sound}
```

## 🎓 What You Learned
- Audio files can hide **visual messages** in the frequency domain that are visible in a spectrogram.  
- Tools like Audacity or Sonic Visualiser are essential for spectrogram analysis.  
- Creating and detecting spectrogram steganography requires thinking in time-frequency rather than just waveform.