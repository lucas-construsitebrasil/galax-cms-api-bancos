CREATE TABLE IF NOT EXISTS `[NOME_TBL]cat` (
`id_cat` INT NOT NULL AUTO_INCREMENT COMMENT 'ID' , 
`nome_cat` VARCHAR(50) NOT NULL COMMENT 'Nome' , 
`pai_cat` INT NULL COMMENT 'Categoria',
`ordem_cat` INT NOT NULL COMMENT 'ORDEM' , 
PRIMARY KEY (`id_cat`)) ENGINE = InnoDB;

ALTER TABLE `[NOME_TBL]cat` ADD INDEX(`pai_cat`);
ALTER TABLE `[NOME_TBL]cat` ADD CONSTRAINT `pai` FOREIGN KEY (`pai_cat`) REFERENCES `[NOME_TBL]cat`(`id_cat`) ON DELETE CASCADE ON UPDATE CASCADE;

CREATE TABLE IF NOT EXISTS [NOME_TBL] (
`id_[SUFIXO]` INT NOT NULL AUTO_INCREMENT COMMENT 'ID' , 
`fk_id_cat_[NOME_TBL]cat` INT NOT NULL COMMENT 'Categoria',
`nome_[SUFIXO]` VARCHAR(50) NOT NULL COMMENT 'Nome' , 
`bln_destaque_[SUFIXO]` CHAR(1) NOT NULL DEFAULT 'F' COMMENT 'Destacar',
`desc_[SUFIXO]` TEXT NOT NULL COMMENT 'DescriÃ§Ã£o' ,                                    
`preco_[SUFIXO]` decimal(10,2) DEFAULT NULL COMMENT 'PreÃ§o',
`ordem_[SUFIXO]` INT NOT NULL COMMENT 'Ordenar' , 
PRIMARY KEY (`id_[SUFIXO]`),
CONSTRAINT `fk_id_cat_[NOME_TBL]cat` FOREIGN KEY (`fk_id_cat_[NOME_TBL]cat`) REFERENCES [NOME_TBL]cat (`id_cat`) ON DELETE CASCADE ON UPDATE CASCADE) ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `[NOME_TBL]_imgs` (
  `id_img` int(11) NOT NULL AUTO_INCREMENT COMMENT 'CÃ³digo',
  `img_[SUFIXO]` varchar(255) NOT NULL COMMENT 'Imagem: Largura [LARGURA_IMG_PRODUTO]px e Altura [ALTURA_IMG_PRODUTO]px',
  `ordem_img` int(11) DEFAULT NULL COMMENT 'Ordem',
  `fk_id_[SUFIXO]_[NOME_TBL]` int(11) NOT NULL COMMENT '',
  PRIMARY KEY (`id_img`),
  CONSTRAINT `fk_id_[SUFIXO]_[NOME_TBL]` FOREIGN KEY (`fk_id_[SUFIXO]_[NOME_TBL]`) REFERENCES [NOME_TBL] (`id_[SUFIXO]`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 ;

ALTER TABLE `config_site` ADD `[NOME_TBL]cat_qtd_niveis` INT NOT NULL COMMENT 'Quantidade de niveis de categoria';

INSERT INTO `modulos` (`nome_interno_modulo`, `nome_plural_modulo`, `nome_singular_modulo`, `caracter_modulo`, `nome_tabela_modulo`, `sufix_tabela_modulo`, `nome_principal_menu`, `campos_exibir_modulo`, `sql_listagem_personalizado`) VALUES ('[NOME_INTERNO]', 'Categorias', 'Categoria', '[CARACTER_MODULO]', '[NOME_TBL]cat', 'cat', '[NOME_PLURAL]','nome_cat,nenhumaTabela.Pai.nome_pai','{"campos":"id_cat,nome_cat, (select nome_cat from [NOME_TBL]cat AS pai where pai.id_cat = [NOME_TBL]cat.pai_cat) AS nome_pai","joins":"","order":"nome_cat ASC","where":""}');

ALTER TABLE config_site ADD crud_comum_[NOME_TBL]_max_qtd_img  int(11) COMMENT "MÃ¡ximo de Imagens por [NOME_PAG]";
UPDATE  `config_site` SET  `crud_comum_[NOME_TBL]_max_qtd_img` =  '[QTD_IMGS_PROD]' WHERE  `id_config` = 1;

UPDATE  `config_site` SET  `[NOME_TBL]cat_qtd_niveis` =  '2' WHERE  `id_config` = 1;

ALTER TABLE [NOME_TBL] ADD FULLTEXT(nome_[SUFIXO]); 
ALTER TABLE [NOME_TBL] ADD FULLTEXT(desc_[SUFIXO]); 
ALTER TABLE [NOME_TBL]cat ADD FULLTEXT(nome_cat); 
ALTER TABLE `config_site` ADD `produtos_permite_adc_categoria_pai` CHAR(1) NOT NULL DEFAULT 'V' COMMENT 'Permitir cadastrar produtos em categoria pai';

CREATE TABLE IF NOT EXISTS `[NOME_TBL]comentarios` (
  `id_comentario` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `autor_comentario` varchar(100) NOT NULL COMMENT 'Autor',
  `bln_comentario` varchar(100) NOT NULL COMMENT 'Aprovar',
  `fk_id_[SUFIXO]_[NOME_TBL]` int(11) NOT NULL COMMENT '[NOME_PAG]',
  `conteudo_comentario` varchar(1000) NOT NULL COMMENT 'ComentÃ¡rio',
  `data_comentario` DATE NOT NULL COMMENT 'Data de cadastro',
  PRIMARY KEY (`id_comentario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `modulos` (`nome_interno_modulo`, `nome_plural_modulo`, `nome_singular_modulo`, `caracter_modulo`, `nome_tabela_modulo`, `sufix_tabela_modulo`, `campos_exibir_modulo`, `sql_listagem_personalizado`, `info_listagem_modulo`) VALUES ('[NOME_INTERNO]', '[NOME_PLURAL] ComentÃ¡rios', '[NOME_SINGULAR] ComentÃ¡rio', '[CARACTER_MODULO]', '[NOME_TBL]comentarios', 'comentario', 'autor_comentario,data_comentario,bln_comentario,nome_[SUFIXO]', '{"campos":"id_comentario,autor_comentario,data_comentario,bln_comentario,[NOME_TBL].nome_[SUFIXO]","joins": "JOIN [NOME_TBL] ON id_[SUFIXO] = fk_id_[SUFIXO]_[NOME_TBL]","order":"id_comentario ASC","where":""}', '[{"id":"info", "desc":"IrÃ£o ser exibidos somente os comentÃ¡rios aprovados, serÃ£o ordenados pela data mais recente."}]');
ALTER TABLE `[NOME_TBL]comentarios` ADD INDEX(`fk_id_[SUFIXO]_[NOME_TBL]`);
ALTER TABLE `[NOME_TBL]comentarios` ADD CONSTRAINT `[NOME_TBL]` FOREIGN KEY (`fk_id_[SUFIXO]_[NOME_TBL]`) REFERENCES `[NOME_TBL]`(`id_[SUFIXO]`) ON DELETE CASCADE ON UPDATE CASCADE;