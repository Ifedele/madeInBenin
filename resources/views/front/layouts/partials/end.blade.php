  <!-- JAVASCRIPTS -->
  <script src="{{asset('storage/assets/libs/tiny-slider/min/tiny-slider.js')}}"></script>
  <script src="{{asset('storage/assets/libs/feather-icons/feather.min.js')}}"></script>
  <script src="{{asset('storage/assets/js/plugins.init.js')}}"></script>
  <script src="{{asset('storage/assets/js/app.js')}}"></script>
  <script>
    document.getElementById('filterPeriod').addEventListener('change', function() {
        window.location.href = window.location.pathname + '?period=' + this.value;
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const categorieFilter = document.getElementById('categorie-filter');
        const sousCategorieFilter = document.getElementById('sous-categorie-filter');
        const typeFilter = document.getElementById('type-filter');

        function filterSousCategories(categoryId) {
            for (const option of sousCategorieFilter.options) {
                if (option.value === '' || option.dataset.parentId === categoryId) {
                    option.style.display = 'block';
                } else {
                    option.style.display = 'none';
                }
            }
            // Réinitialiser la sélection de la sous-catégorie
            sousCategorieFilter.value = '';
            // Réinitialiser également les types lorsque la catégorie change
            filterTypes('');
        }

        function filterTypes(sousCategoryId) {
            for (const option of typeFilter.options) {
                if (option.value === '' || option.dataset.parentId === sousCategoryId) {
                    option.style.display = 'block';
                } else {
                    option.style.display = 'none';
                }
            }
            // Réinitialiser la sélection du type
            typeFilter.value = '';
        }

        // Écouter le changement de catégorie
        categorieFilter.addEventListener('change', function() {
            const selectedCategoryId = this.value;
            filterSousCategories(selectedCategoryId);
        });

        // Écouter le changement de sous-catégorie
        sousCategorieFilter.addEventListener('change', function() {
            const selectedSousCategoryId = this.value;
            filterTypes(selectedSousCategoryId);
        });

        // Initialiser l'affichage des sous-catégories au chargement de la page (afficher toutes)
        filterSousCategories('');
        // Initialiser l'affichage des types au chargement de la page (afficher toutes)
        filterTypes('');
    });

    document.addEventListener('DOMContentLoaded', function() {
    const filterButton = document.getElementById('filter-button'); // Récupérer le bouton Filtrer
    const searchInput = document.getElementById('search-produit'); // Récupérer l'input de recherche
    const categorieFilter = document.getElementById('categorie-filter');
    const sousCategorieFilter = document.getElementById('sous-categorie-filter');
    const typeFilter = document.getElementById('type-filter');

    // Gestion du clic sur le bouton Filtrer
    filterButton.addEventListener('click', function() {
        let url = '/explore.index?';
        if (searchInput.value) {
            url += `search_produit=${searchInput.value}&`;
        }
        if (categorieFilter.value) {
            url += `categorie_filter=${categorieFilter.value}&`;
        }
        if (sousCategorieFilter.value) {
            url += `sous_categorie_filter=${sousCategorieFilter.value}&`;
        }
        if (typeFilter.value) {
            url += `type_filter=${typeFilter.value}&`;
        }
        window.location.href = url.slice(0, -1); // Rediriger sans le dernier '&'
    });
});
</script>
  <!-- JAVASCRIPTS -->

  <script>
   document.addEventListener('DOMContentLoaded', function () {
    // Gestion de l'ouverture du modal de panier
    const ouvrirPanierBtnExistant = document.querySelector('.dropdown-toggle .mdi-cart');
    const panierModal = document.getElementById('panierModal');
    const fermerPanierModal = document.getElementById('fermerPanierModal');
    const panierContenu = document.getElementById('panierContenu');
    const panierSousTotal = document.getElementById('panierSousTotal');
    const panierNombreArticles = document.getElementById('panierNombreArticles');

    function chargerContenuPanier() {
        fetch('/panier/contenu')
            .then(response => response.json())
            .then(data => {
                panierContenu.innerHTML = '';
                if (data.produits.length > 0) {
                    let html = '<ul class="space-y-2">';
                    data.produits.forEach(produit => {
                        html += `<li class="flex items-center justify-between">
                                    <span>${produit.nom} x ${produit.qte}</span>
                                    <span>${produit.total_produit} €</span>
                                </li>`;
                    });
                    html += '</ul>';
                    panierContenu.innerHTML = html;
                } else {
                    panierContenu.innerHTML = '<p>Votre panier est vide.</p>';
                }
                panierSousTotal.textContent = `${data.total} €`;
                panierNombreArticles.textContent = data.nombre_produits;
            })
            .catch(error => {
                console.error('Erreur lors de la récupération du contenu du panier:', error);
                panierContenu.innerHTML = '<p>Erreur lors du chargement du panier.</p>';
            });
    }

    if (ouvrirPanierBtnExistant && panierModal && fermerPanierModal) {
        ouvrirPanierBtnExistant.addEventListener('click', function (event) {
            event.preventDefault();
            panierModal.classList.remove('hidden');
            chargerContenuPanier();
        });

        fermerPanierModal.addEventListener('click', function () {
            panierModal.classList.add('hidden');
        });

        panierModal.addEventListener('click', function (event) {
            if (event.target === panierModal) {
                panierModal.classList.add('hidden');
            }
        });

        // Charger le nombre de produits initial au chargement de la page
        fetch('/panier/contenu')
            .then(response => response.json())
            .then(data => {
                if (panierNombreArticles) {
                    panierNombreArticles.textContent = data.nombre_produits;
                }
            })
            .catch(error => {
                console.error('Erreur lors de la récupération initiale du nombre de produits:', error);
            });
    }

    // Gestion de l'ajout au panier
    const boutonsAjouterPanier = document.querySelectorAll('.ajouter-au-panier-btn');
    const ajoutPanierConfirmation = document.getElementById('ajoutPanierConfirmation');

    boutonsAjouterPanier.forEach(bouton => {
        bouton.addEventListener('click', function (event) {
            event.preventDefault();
            const produitId = this.getAttribute('data-produit-id');

            fetch(`/panier/ajouter/${produitId}`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                }
            })
            .then(response => response.json())
            .then(data => {
                if (ajoutPanierConfirmation) {
                    ajoutPanierConfirmation.classList.remove('hidden');
                    setTimeout(() => {
                        ajoutPanierConfirmation.classList.add('hidden');
                    }, 3000);
                }
                if (panierNombreArticles) {
                    panierNombreArticles.textContent = data.nombre_produits;
                }
                chargerContenuPanier(); // Mettre à jour le contenu du modal après l'ajout
            })
            .catch(error => {
                console.error('Erreur lors de l\'ajout au panier:', error);
                alert('Erreur lors de l\'ajout au panier.');
            });
        });
    });
});
</script>
</body>


</html>
