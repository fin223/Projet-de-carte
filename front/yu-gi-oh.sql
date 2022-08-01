-- Insertion des données des cartes du deck "Cypher"

INSERT INTO `deck` (`StatCarte_idCarte`, `SpellCard_idSpellCard`, `TrapCard_idTrapCard`, `Type` ) VALUES
(1, 1, 1, "Cypher"),
(2, 1, 1, "Cypher"),
(3, 1, 1, "Cypher"),
(4, 1, 1, "Cypher"),
(5, 1, 1, "Cypher"),
(6, 1, 1, "Cypher"),
(7, 1, 1, "Cypher"),
(8, 1, 1, "Cypher"),
(9, 1, 1, "Cypher"),
(10, 1, 1, "Cypher"),
(11, 1, 1, "Cypher"),
(12, 1, 1, "Cypher"),
(13, 1, 1, "Cypher"),
(14, 1, 1, "Cypher"),
(15, 1, 1, "Cypher"),
(16, 1, 1, "Cypher"),
(17, 1, 1, "Cypher"),
(18, 1, 1, "Cypher"),
(19, 1, 1, "Cypher"),
(20, 1, 1, "Cypher"),
(1, 1, 1, "Cypher"),
(1, 2, 1, "Cypher"),
(1, 3, 1, "Cypher"),
(1, 4, 1, "Cypher"),
(1, 5, 1, "Cypher"),
(1, 6, 1, "Cypher"),
(1, 7, 1, "Cypher"),
(1, 8, 1, "Cypher"),
(1, 9, 1, "Cypher"),
(1, 10, 1, "Cypher"),
(1, 1, 1, "Cypher"),
(1, 1, 2, "Cypher"),
(1, 1, 3, "Cypher"),
(1, 1, 4, "Cypher"),
(1, 1, 5, "Cypher"),
(1, 1, 6, "Cypher"),
(1, 1, 7, "Cypher"),
(1, 1, 8, "Cypher"),
(1, 1, 9, "Cypher"),
(1, 1, 10, "Cypher");


ALTER TABLE `deck`
    ADD PRIMARY KEY (`SpellCard_idSpellCard, StatCarte_idCarte, TrapCard_idTrapCard`),
    ADD KEY `fk_deck_SpellCard1_idx` (`SpellCard_idSpellCard`),
    ADD KEY `fk_deck_StatCarte1_idx` (`StatCarte_idCarte`),
    ADD KEY `fk_deck_TrapCard1_idx` (`TrapCard_idTrapCard`);

ALTER TABLE `deck`
    ADD CONSTRAINT `fk_deck_SpellCard1_idx` FOREIGN KEY (`SpellCard_idSpellCard`) REFERENCES `SpellCard` (`idSpellCard`) ON DELETE NO ACTION ON UPDATE NO ACTION,
    ADD CONSTRAINT `fk_deck_StatCarte1_idx` FOREIGN KEY (`StatCarte_idCarte`) REFERENCES `StatCarte` (`idCarte`) ON DELETE NO ACTION ON UPDATE NO ACTION,
    ADD CONSTRAINT `fk_deck_TrapCard1_idx` FOREIGN KEY (`TrapCard_idTrapCard`) REFERENCES `TrapCard` (`idTrapCard`) ON DELETE NO ACTION ON UPDATE NO ACTION;

COMMIT;

-- Insertion des données des cartes du deck "Chaine Glaciale"
