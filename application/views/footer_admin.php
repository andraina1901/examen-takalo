</div>
    </div>
</body>
</html>
    <script>
            console.log("dasfdf");
            const buttons = document.querySelectorAll(".button ");
            buttons.forEach(button => {
                button.addEventListener("click", function() {
                const ids = this.id;
                const name = this.value;
                var a = document.getElementById("productName") ;
                a.innerHTML = ` Nom du produit:`+ name ;
                var b = document.getElementById("hidden") ;
                document.getElementById("hidden").value = ids;   

            });
            });
    </script>
