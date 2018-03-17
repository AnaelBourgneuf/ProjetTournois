-- phpMyAdmin SQL Dump
-- version 3.1.5
-- http://www.phpmyadmin.net
--
-- Serveur: spearitournament.sql.free.fr
-- Généré le : Mer 14 Mars 2018 à 16:58
-- Version du serveur: 5.0.83
-- Version de PHP: 5.3.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Base de données: `spearitournament`
--

-- --------------------------------------------------------

--
-- Structure de la table `sprt_chat`
--

CREATE TABLE IF NOT EXISTS `sprt_chat` (
  `chat_id` int(11) NOT NULL auto_increment,
  `chat_nick` varchar(25) default NULL,
  `chat_msg` varchar(25) default NULL,
  `chat_stamp` datetime default NULL,
  `user_id` int(11) default NULL,
  PRIMARY KEY  (`chat_id`),
  KEY `FK_sprt_chat_user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `sprt_chat`
--


-- --------------------------------------------------------

--
-- Structure de la table `sprt_contestants`
--

CREATE TABLE IF NOT EXISTS `sprt_contestants` (
  `cont_id` int(11) NOT NULL auto_increment,
  `cont_score` int(11) default NULL,
  PRIMARY KEY  (`cont_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `sprt_contestants`
--


-- --------------------------------------------------------

--
-- Structure de la table `sprt_event`
--

CREATE TABLE IF NOT EXISTS `sprt_event` (
  `ev_id` int(11) NOT NULL auto_increment,
  `ev_name` char(25) default NULL,
  `ev_creator` char(25) default NULL,
  `ev_cont_list` char(25) default NULL,
  'ev_cont_min' int(1) NOT NULL,
  'ev_cont_max' int(2) NOT NULL,
  `ev_stamp` datetime default NULL,
  `user_id` int(11) default NULL,
  PRIMARY KEY  (`ev_id`),
  KEY `FK_sprt_event_user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `sprt_event`
--


-- --------------------------------------------------------

--
-- Structure de la table `sprt_forum`
--

CREATE TABLE IF NOT EXISTS `sprt_forum` (
  `forum_id` int(11) NOT NULL auto_increment,
  `forum_iscontainer` tinyint(1) default NULL,
  `forum_msg` varchar(25) default NULL,
  `forum_nick` char(25) default NULL,
  `forum_stamp` datetime default NULL,
  `forum_topic` char(25) default NULL,
  PRIMARY KEY  (`forum_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `sprt_forum`
--


-- --------------------------------------------------------

--
-- Structure de la table `sprt_forum_talk`
--

CREATE TABLE IF NOT EXISTS `sprt_forum_talk` (
  `user_id` int(11) NOT NULL,
  `forum_id` int(11) NOT NULL,
  PRIMARY KEY  (`user_id`,`forum_id`),
  KEY `FK_sprt_forum_talk_forum_id` (`forum_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `sprt_forum_talk`
--


-- --------------------------------------------------------

--
-- Structure de la table `sprt_join`
--

CREATE TABLE IF NOT EXISTS `sprt_join` (
  `cont_id` int(11) NOT NULL,
  `ev_id` int(11) NOT NULL,
  PRIMARY KEY  (`cont_id`,`ev_id`),
  KEY `FK_sprt_join_ev_id` (`ev_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `sprt_join`
--


-- --------------------------------------------------------

--
-- Structure de la table `sprt_participate`
--

CREATE TABLE IF NOT EXISTS `sprt_participate` (
  `user_id` int(11) NOT NULL,
  `cont_id` int(11) NOT NULL,
  PRIMARY KEY  (`user_id`,`cont_id`),
  KEY `FK_sprt_participate_cont_id` (`cont_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `sprt_participate`
--


-- --------------------------------------------------------

--
-- Structure de la table `sprt_user`
--

CREATE TABLE IF NOT EXISTS `sprt_user` (
  `user_id` int(11) NOT NULL auto_increment,
  `user_email` varchar(25) default NULL,
  `user_lname` char(25) default NULL,
  `user_name` char(25) default NULL,
  `user_interest` char(25) default NULL,
  `user_nick` char(25) default NULL,
  `user_isadmin` tinyint(1) default NULL,
  `user_avatar` blob,
  PRIMARY KEY  (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `sprt_user`
--

INSERT INTO `sprt_user` (`user_id`, `user_email`, `user_lname`, `user_name`, `user_interest`, `user_nick`, `user_isadmin`, `user_avatar`) VALUES
(1, 'TestA@test.com', 'TESTA', 'Testa', 'Tester en Admin', 'T3ST3R4', 1, NULL),
(2, 'Test@test.com', 'TEST', 'Test', 'Tester', 'T3ST3R', 0, NULL);
