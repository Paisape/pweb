const fs = require('fs');
const path = require('path');

function walk(dir) {
    let results = [];
    const list = fs.readdirSync(dir);
    list.forEach(file => {
        file = path.join(dir, file);
        const stat = fs.statSync(file);
        if (stat && stat.isDirectory()) { 
            results = results.concat(walk(file));
        } else { 
            if(file.endsWith('.php') || file.endsWith('.html')) results.push(file);
        }
    });
    return results;
}

const files = walk('f:/Pweb/paisape-website');
files.forEach(f => {
    let content = fs.readFileSync(f, 'utf8');
    if (content.includes('â€”')) {
        content = content.split('â€”').join('—');
        fs.writeFileSync(f, content, 'utf8');
        console.log('Updated ' + f);
    }
});
