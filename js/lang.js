 const flagMd = document.getElementById('flags');
 const flagRu = document.getElementById('flags-ru');

 flagMd.outerHTML = `<a href="${pageId}.php" id="flags"><img src="img/md.png" alt="MD"></a>`
 flagRu.outerHTML = `<a href="${pageId}-ru.php" id="flags-ru"><img src="img/ru.png" alt="RU"></a>`
//  console.dir(flagMd);
//  console.dir(flagRu);

//  addEventListener('click', );