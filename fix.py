import os
import glob

# Search in the entire project
def replace_in_files():
    for root, dirs, files in os.walk('f:/Pweb/paisape-website'):
        for file in files:
            if file.endswith('.php') or file.endswith('.html'):
                path = os.path.join(root, file)
                try:
                    with open(path, 'r', encoding='utf-8') as f:
                        content = f.read()
                    
                    if 'â€”' in content:
                        content = content.replace('â€”', '—')
                        with open(path, 'w', encoding='utf-8') as f:
                            f.write(content)
                        print(f"Updated {file}")
                except Exception as e:
                    pass

replace_in_files()
