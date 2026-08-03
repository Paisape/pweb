import os
import re
import shutil

# Target directory
website_dir = r"f:\Pweb\paisape-website"

mumbai_old_address = "Bandra Kurla Complex, Bandra East,<br>Mumbai, Maharashtra 400051"
mumbai_old_address_2 = "Bandra Kurla Complex, Bandra \nEast,<br>Mumbai, Maharashtra 400051"
mumbai_new_address = "409, Fortune Emporio, Opposite Thakur Mall, Western Express Hwy, Mira Road East,<br>Mira Bhayandar, Maharashtra 401107"

blr_old_title = "Bengaluru &mdash; Engineering"
blr_old_address = "Indiranagar 100 Ft Road,<br>Bengaluru, Karnataka 560038"
blr_old_address_2 = "Indiranagar 100 Ft \nRoad,<br>Bengaluru, Karnataka 560038"
blr_new_title = "Chandigarh &mdash; Engineering"
blr_new_address = "1510 Sector 82, Sahibzada Ajit Singh Nagar,<br>Punjab 140306"

for filename in os.listdir(website_dir):
    if filename.endswith(".html"):
        filepath = os.path.join(website_dir, filename)
        with open(filepath, "r", encoding="utf-8") as f:
            content = f.read()
        
        # Replace paisape.com with paisape.in
        content = content.replace("paisape.com", "paisape.in")
        
        # Replace .html in hrefs
        content = re.sub(r'href="([^"]+)\.html(#?[^"]*)"', r'href="\1\2"', content)
        
        # Replace Mumbai address
        content = content.replace(mumbai_old_address, mumbai_new_address)
        content = content.replace("Bandra Kurla Complex, Bandra \nEast,<br>Mumbai, Maharashtra 400051", mumbai_new_address)
        
        # Replace Bengaluru address
        content = content.replace(blr_old_title, blr_new_title)
        content = content.replace(blr_old_address, blr_new_address)
        content = content.replace("Indiranagar 100 Ft \nRoad,<br>Bengaluru, Karnataka 560038", blr_new_address)
        
        # Replace legal links in footer
        # Note: Previous href="#" could be exactly this:
        content = content.replace(
            '<li><a href="#" class="transition hover:text-brand">Privacy Policy</a></li>',
            '<li><a href="privacy" class="transition hover:text-brand">Privacy Policy</a></li>'
        )
        content = content.replace(
            '<li><a href="#" class="transition hover:text-brand">Refund Policy</a></li>',
            '<li><a href="refund-policy" class="transition hover:text-brand">Refund Policy</a></li>'
        )
        content = content.replace(
            '<li><a href="#" class="transition hover:text-brand">Terms &amp; Conditions</a></li>',
            '<li><a href="terms-and-conditions" class="transition hover:text-brand">Terms &amp; Conditions</a></li>'
        )
        
        with open(filepath, "w", encoding="utf-8") as f:
            f.write(content)

print("Updates completed successfully.")
