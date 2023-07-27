 // JavaScript ile tarihi alıp, span etiketine Türkçe olarak ekleyelim
 var tarihElementi = document.getElementById('tarih');
 var tarih = new Date();

 // Tarihi Türkçe olarak biçimlendirme
 var tarihOptions = { year: 'numeric', month: 'long', day: 'numeric', weekday: 'long' };
 var tarihStr = tarih.toLocaleDateString('tr-TR', tarihOptions);

 tarihElementi.innerText = tarihStr;