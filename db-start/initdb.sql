-- Tabela de exemplo para testes
--
CREATE TABLE IF NOT EXISTS `dadosusers` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(55) DEFAULT NULL,
  `idade` int(2) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10001 ;
--
-- Informacoes para teste
--
INSERT INTO `dadosusers` (`nome`, `idade`) VALUES
('david', 24),
('rogers', 34),
('david', 46),
('maria', 65),
('morris', 45),
('daniel', 61),
('sanders', 56),
('mark', 16),
('morgan', 12),
('paul', 54);