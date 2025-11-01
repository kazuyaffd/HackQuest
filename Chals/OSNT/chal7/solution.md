# OSINT Challenge – Find the Lake

## Challenge
You are given a panoramic photo of a beautiful lake surrounded by mountains.  
Can you determine the **exact coordinates (latitude, longitude)** of the place where this photo was taken?


## Step-by-Step Solution

1. **Analyze the image:**
   - The photo shows a **large reservoir** with turquoise water.
   - The shoreline shape is distinctive: curved with small peninsulas and a narrow entrance.

2. **Reverse image search:**
   - Upload the image to **Google Lens** or **TinEye**.
   - Matches appear for the **Zhinvali (Jinvali) Water Reservoir** in Georgia.

3. **Context confirmation:**
   - The **Zhinvali Reservoir** is located in the **Caucasus Mountains of Georgia**.
   - Photos online show the same view from the roadside viewpoint above the lake.

4. **Find the exact viewpoint:**
   - Open **Google Maps / Google Earth** → search for **Zhinvali Reservoir**.
   - Switch to **satellite/terrain view** and compare shoreline curves with the challenge image.
   - Street View also shows the **roadside viewpoint** where tourists take photos.

5. **Pinpoint the coordinates:**
   - Exact spot:  
     ```
     42° 8'43.69"N, 44°45'53.97"E
     ```
   - Decimal degrees: **42.14547, 44.76499**

## ✅ Flag
```
FLAG{42.14547,44.76499}
```

## What You Learned
- Using **reverse image search** to identify landmarks.  
- Matching **shoreline shapes** in Google Earth with photos.  
- Confirming **exact photography viewpoints** by checking Street View.  
- Extracting **precise coordinates** in both DMS and decimal degrees formats.

