CREATE TABLE recettes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    ingredients TEXT NOT NULL,
    etapes_preparation TEXT NOT NULL,
    temps_preparation INT NOT NULL,
    temps_cuisson INT NOT NULL,
    categorie VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO recettes (nom, description, ingredients, etapes_preparation, temps_preparation, temps_cuisson, categorie) VALUES
('Spaghetti Carbonara', 'Un classique italien rapide et savoureux.', '400g de spaghetti, 200g de pancetta coupée en dés, 4 gros œufs, 100g de parmesan râpé, Sel et poivre noir', '1. Faire cuire les spaghetti al dente. 2. Faire revenir la pancetta jusqu\'à ce qu\'elle soit croustillante. 3. Battre les œufs avec le parmesan, le sel, et le poivre. 4. Mélanger les pâtes avec la pancetta, puis ajouter le mélange d\'œufs hors du feu. 5. Servir immédiatement avec un peu de parmesan.', 10, 10, 'Plat principal');

INSERT INTO recettes (nom, description, ingredients, etapes_preparation, temps_preparation, temps_cuisson, categorie) VALUES
('Salade César', 'Une salade fraîche et croquante avec une touche d\'anchois.', '1 laitue romaine, 2 tranches de pain de mie, 50g de parmesan en copeaux, 2 filets d\'anchois, Sauce César, 1 gousse d\'ail', '1. Couper le pain en cubes et le faire dorer à la poêle avec l\'ail. 2. Laver et couper la laitue, la disposer dans un saladier. 3. Ajouter les croûtons, les copeaux de parmesan, et les anchois. 4. Assaisonner avec la sauce César avant de servir.', 15, 5, 'Entrée');

INSERT INTO recettes (nom, description, ingredients, etapes_preparation, temps_preparation, temps_cuisson, categorie) VALUES
('Crêpes Simples', 'Des crêpes légères et délicieuses pour le petit-déjeuner ou le dessert.', '250g de farine, 500ml de lait, 3 œufs, 1 pincée de sel, 2 cuillères à soupe de sucre', '1. Mélanger la farine, le sel, et le sucre dans un saladier. 2. Ajouter les œufs et mélanger progressivement en ajoutant le lait pour éviter les grumeaux. 3. Laisser reposer la pâte 30 minutes. 4. Cuire les crêpes dans une poêle chaude légèrement huilée.', 5, 20, 'Dessert');

INSERT INTO recettes (nom, description, ingredients, etapes_preparation, temps_preparation, temps_cuisson, categorie) VALUES
('Guacamole', 'Une trempette avocat fraîche et épicée, parfaite pour l\'apéritif.', '2 avocats mûrs, 1 tomate, 1 oignon rouge, Le jus d\'1 citron vert, Coriandre fraîche, Sel et poivre', '1. Écraser la chair d\'avocat dans un bol. 2. Hacher finement la tomate, l\'oignon, et la coriandre, puis les ajouter à l\'avocat. 3. Assaisonner avec le jus de citron, le sel, et le poivre. 4. Bien mélanger et servir frais avec des chips de tortilla.', 10, 0, 'Apéritif');
