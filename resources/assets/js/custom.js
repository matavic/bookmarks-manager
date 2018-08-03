const axios = require('axios');

$('body').on('click', '.delete-bookmark', function() {
  let id = $(this).data('id');

  axios
    .delete('/bookmarks/' + id)
    .then(function() {
      window.location.reload();
    })
    .catch(function(error) {
      console.log(error);
    });
});

/* 
function modifyText() {
  alert(this.dataset.id);
}

function load() {
  const el = document.querySelector('.delete-bookmark');
  el.addEventListener('click', modifyText, false);
}

document.addEventListener('DOMContentLoaded', load, false);

*/
