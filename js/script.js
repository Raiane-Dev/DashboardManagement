if ('serviceWorker' in navigator) {
    // Registra um service worker hospeadado na raiz do
    // site usando o escopo padrão
    navigator.serviceWorker.register('js/sw.js').then(function(registration) {
      console.log('Service worker  registrado com sucesso:', registration);
    }).catch(function(error) {
      console.log('Falha ao Registrar o Service Worker:', error);
    });
  } else {
    console.log('Service workers não suportado!');
  }


  /////////////////////////////////////////////////////////////////////////////
  var textarea = document.getElementById('textarea');

  document.getElementById('text-type').addEventListener('change', (e) =>{
    var textType = document.getElementById('text-type').value;
    textarea.setAttribute('value','<'+textType+'>'+textarea.value+'</'+textType+'>');
    
    var select = document.getElementById('text-type');
    var selected = select.options[select.selectedIndex].value;
      if(selected == 'paragrafo'){
        textarea.setAttribute('style','font-size:.8rem; ');
      }else if(selected == 'h1'){
        textarea.setAttribute('style','font-size:2rem; ');
      }else if(selected == 'h2'){
        textarea.setAttribute('style','font-size:1.5rem; ');
      }else if(selected == 'h3'){
        textarea.setAttribute('style','font-size:1.2rem; ');
      }else if(selected == 'h4'){
        textarea.setAttribute('style','font-size:1rem; ');
      }else if(selected == 'h5'){
        textarea.setAttribute('style','font-size:.9rem; ');
      }else if(selected == 'h6'){
        textarea.setAttribute('style','font-size:.8rem; ');
      }
  });
  
  document.getElementById('strong').addEventListener('click', (e) =>{
    textarea.setAttribute('style','font-weight: bold;');
  });

  document.getElementById('italic').addEventListener('click', (e) =>{
    textarea.setAttribute('style','font-style: italic;');
  });

  document.getElementById('underline').addEventListener('click', (e) =>{
    textarea.setAttribute('style','text-decoration: underline;');
  });

  document.getElementById('strikethrough').addEventListener('click', (e) =>{
    textarea.setAttribute('style','text-decoration: line-through;');
  });

  document.getElementById('testimonial').addEventListener('click', (e) =>{
    textarea.value = '❛❛ ❜❜';
  });

  document.getElementById('code').addEventListener('click', (e) =>{
    textarea.value = '<html> </html>';
  });

  document.getElementById('color-select').addEventListener('click', (e) =>{
    var color = document.getElementById('color').value;
    textarea.setAttribute('style','color: ' + color);
  });

  document.getElementById('background-text').addEventListener('click', (e) =>{
    textarea.setAttribute('style','background-color: #000');
  });

  document.getElementById('text-align-left').addEventListener('click', (e) =>{
    textarea.setAttribute('style','text-align: left');
  });

  document.getElementById('text-align-center').addEventListener('click', (e) =>{
    textarea.setAttribute('style','text-align: center');
  });

  document.getElementById('text-align-right').addEventListener('click', (e) =>{
    textarea.setAttribute('style','text-align: right');
  });
  
  document.getElementById('text-align-justify').addEventListener('click', (e) =>{
    textarea.setAttribute('style','text-align: justify');
  });

  document.getElementById('list').addEventListener('click', (e) =>{
    textarea.setAttribute('value','<li>');
  });

  document.getElementById('image').addEventListener('click', (e) =>{
    var image = document.getElementById('image').value;
    textarea.value = '<img src="'+image+'"/>';
  });

  document.getElementById('video').addEventListener('click', (e) =>{
    var film = document.getElementById('film').value;
    textarea.value = '<video src="'+film+'"</video>';
  });

  document.getElementById('delete').addEventListener('click', (e) =>{
    textarea.value = '';
  });

  document.getElementById('href').addEventListener('click', (e) =>{
    textarea.value = '<a href="SEU LINK"> </a>';
    textarea.setAttribute('style','color: #1978a2; ');
  });

  document.getElementById('delete').addEventListener('click', (e) =>{
    textarea.value = '';
  });