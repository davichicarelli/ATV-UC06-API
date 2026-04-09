CREATE TABLE pizzas (
    idPizza INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(50) NOT NULL,
    ingredientes VARCHAR(255) NOT NULL,
    valor DECIMAL(10, 2) NOT NULL
);
 
INSERT INTO pizzas (nome, ingredientes, valor) VALUES
('Calabresa', 'Mussarela, calabresa fatiada e cebola', 45.50),
('Mussarela', 'Mussarela e molho de tomate', 40.00),
('Frango com Catupiry', 'Frango desfiado, catupiry e mussarela', 52.90),
('Portuguesa', 'Mussarela, presunto, ovo, ervilha, cebola e calabresa', 62.90),
('Moda do Juca', 'Mussarela, peito de peru, palmito, alho poró e alcaparras', 72.50);

CREATE TABLE bebidas (
    idBebida INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(50) NOT NULL,
    tipo VARCHAR(255) NOT NULL,
    valor DECIMAL(10, 2) NOT NULL
);

INSERT INTO bebidas (nome, tipo, valor) VALUES
('Coca-Cola 350ml', 'Refrigerante', 5.50),
('Coca-Cola 2L', 'Refrigerante', 11.90),
('Guaraná Antarctica 350ml', 'Refrigerante', 5.00),
('Guaraná Antarctica 2L', 'Refrigerante', 11.50),
('Fanta Laranja 350ml', 'Refrigerante', 5.00),
('Sprite 350ml', 'Refrigerante', 5.00),
('Pepsi 350ml', 'Refrigerante', 4.80),
('Água Mineral 500ml', 'Água', 3.00),
('Água com Gás 500ml', 'Água', 3.50),
('Suco de Laranja 300ml', 'Suco Natural', 7.00),
('Suco de Uva 300ml', 'Suco', 6.50),
('Suco de Maracujá 300ml', 'Suco Natural', 7.00),
('Cerveja Skol 350ml', 'Cerveja', 6.00),
('Cerveja Brahma 350ml', 'Cerveja', 6.00),
('Heineken Long Neck', 'Cerveja Premium', 9.00),
('Stella Artois Long Neck', 'Cerveja Premium', 9.50),
('Chopp 300ml', 'Chopp', 8.00),
('Chopp 500ml', 'Chopp', 12.00),
('Vinho Tinto (Taça)', 'Vinho', 10.00),
('Vinho Branco (Taça)', 'Vinho', 10.00),
('Red Bull 250ml', 'Energético', 12.00),
('Monster 473ml', 'Energético', 14.00),
('Smirnoff Ice 275ml', 'Bebida Alcoólica', 10.00),
('Caipirinha Tradicional', 'Drink', 15.00),
('Caipirinha de Morango', 'Drink', 17.00),
('Refrigerante Zero 350ml', 'Refrigerante', 5.50);