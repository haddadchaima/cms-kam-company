function search() {
  let input = document.querySelector("#input_search");
  let list_items = document.querySelectorAll(".list_search");
  let filter = input.value.toUpperCase();
  
  let match = false;
  
  list_items.forEach(item => {
  
    let text = item.textContent.toUpperCase();
    
    if (text.includes(filter)) {
      match = true;
      item.style.display = 'block';
    } else {
      item.style.display = 'none';
    }
  });
  
  document.querySelector(".no-result").style.display = match ? 'none' : 'block';
}

document.querySelector("#input_search").addEventListener('input', () => search())
