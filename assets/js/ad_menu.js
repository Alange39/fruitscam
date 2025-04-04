document.getElementById("menu").addEventListener("click", () => {
  let conn = document.getElementById("submenu").style;
  conn.display = conn.display == "block" ? "none" : "block";
});
