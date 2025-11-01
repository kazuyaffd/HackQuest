# Challenge 6 – The Bus Ride

## Challenge
While on holiday I really enjoyed riding that bus in the image.  
I’d love to know the **day the vehicle was registered (YYYY-MM-DD)** and which company it’s insured with.  

## Step-by-Step Solution
1. **Clues in the photo:**
   - The political poster shows **Rasmus Hylleberg**, a candidate in the **Roskilde** constituency, narrowing the location to Roskilde, Denmark.
   - The image also shows a **7-Eleven store**, of which there are very few in Roskilde.

2. **Verify the exact location:**
   - Searching **“Roskilde 7/11”** in Google Maps shows the same building and confirms the location.

3. **Identify the bus operator:**
   - On closer inspection of the buses in the street view, one has markings:
     - Operator: **Ditobus**
     - Vehicle number: **4646**

   - Googling `Ditobus 4646` provides data linking to a specific vehicle.

4. **Retrieve the registration details:**
   - Using online vehicle lookups such as:
     - [Motorregister SKAT](https://motorregister.skat.dk/)
     - [Altombilen Vehicle Registry](https://www.altombilen.dk/koeretoej/UY89703/7547486)

   - The registration number is found as **UY89703**.

5. **Extract required information:**
   - Registration date: **2007-02-12**  
   - Insurance company: **Gjensidige Forsikring** (translated: Mutual Insurance)

## ✅ Flags
```
FLAG{2007-02-12_Mutual_Insurance}
```

## What You Learned
- Location clues (political posters, brands, stores) help narrow a city or town.  
- Vehicle fleet numbers (like Ditobus 4646) can be pivoted into **registration databases**.  
- Public registries often reveal **registration dates and insurance details**.  
- Always confirm with multiple trusted sources (official registries).