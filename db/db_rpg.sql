CREATE TABLE ability (
  id_ability INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  personagem_player_id_player INTEGER UNSIGNED NOT NULL,
  personagem_combat_id_combat INTEGER UNSIGNED NOT NULL,
  personagem_id_personagem INTEGER UNSIGNED NOT NULL,
  name_ability VARCHAR(30) NULL,
  value_ability INTEGER UNSIGNED NULL,
  PRIMARY KEY(id_ability, personagem_player_id_player, personagem_combat_id_combat, personagem_id_personagem),
  INDEX ability_FKIndex1(personagem_combat_id_combat, personagem_player_id_player, personagem_id_personagem)
);

CREATE TABLE atk (
  id_atk INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  personagem_combat_id_combat INTEGER UNSIGNED NOT NULL,
  personagem_player_id_player INTEGER UNSIGNED NOT NULL,
  personagem_id_personagem INTEGER UNSIGNED NOT NULL,
  damage_atk VARCHAR(10) NULL,
  type_atk VARCHAR(100) NULL,
  obs_atk TEXT NULL,
  PRIMARY KEY(id_atk, personagem_combat_id_combat, personagem_player_id_player, personagem_id_personagem),
  INDEX atk_FKIndex1(personagem_combat_id_combat, personagem_player_id_player, personagem_id_personagem)
);

CREATE TABLE cantrip (
  id_cantrip INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  spellcast_id_spellcast INTEGER UNSIGNED NOT NULL,
  spellcast_personagem_id_personagem INTEGER UNSIGNED NOT NULL,
  spellcast_personagem_combat_id_combat INTEGER UNSIGNED NOT NULL,
  spellcast_personagem_player_id_player INTEGER UNSIGNED NOT NULL,
  name_cantrip VARCHAR(60) NULL,
  desc_cantrip TEXT NULL,
  PRIMARY KEY(id_cantrip, spellcast_id_spellcast, spellcast_personagem_id_personagem, spellcast_personagem_combat_id_combat, spellcast_personagem_player_id_player),
  INDEX cantrip_FKIndex1(spellcast_id_spellcast, spellcast_personagem_player_id_player, spellcast_personagem_combat_id_combat, spellcast_personagem_id_personagem)
);

CREATE TABLE combat (
  id_combat INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  armo_class_combat INTEGER UNSIGNED NULL,
  initiative_combat INTEGER UNSIGNED NULL,
  speed INTEGER UNSIGNED NULL,
  hit_pt_max_combat INT NULL,
  temp_hit_pt_combat INT NULL,
  hit_dice_combat VARCHAR(10) NULL,
  death_save_suc_combat INTEGER UNSIGNED NULL,
  death_save_fail_combat INTEGER UNSIGNED NULL,
  PRIMARY KEY(id_combat)
);

CREATE TABLE equipment (
  id_equipment INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  personagem_player_id_player INTEGER UNSIGNED NOT NULL,
  personagem_combat_id_combat INTEGER UNSIGNED NOT NULL,
  personagem_id_personagem INTEGER UNSIGNED NOT NULL,
  copper_equipment DOUBLE NULL,
  silver_equipment DOUBLE NULL,
  electrum_equipment DOUBLE NULL,
  gold_equipment DOUBLE NULL,
  platinum_equipment DOUBLE NULL,
  obs_equipment TEXT NULL,
  PRIMARY KEY(id_equipment, personagem_player_id_player, personagem_combat_id_combat, personagem_id_personagem),
  INDEX equipment_FKIndex1(personagem_combat_id_combat, personagem_player_id_player, personagem_id_personagem)
);

CREATE TABLE personagem (
  id_personagem INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  combat_id_combat INTEGER UNSIGNED NOT NULL,
  player_id_player INTEGER UNSIGNED NOT NULL,
  name_personagem VARCHAR(255) NULL,
  class_personagem VARCHAR(50) NULL,
  level_personagem INT NULL,
  background_personagem VARCHAR(100) NULL,
  race_personagem VARCHAR(80) NULL,
  alignment_personagem VARCHAR(100) NULL,
  bonds_personagem TEXT NULL,
  exp_personagem INT NULL,
  personality_personagem TEXT NULL,
  flaws_personagem TEXT NULL,
  ideals_personagem TEXT NULL,
  PRIMARY KEY(id_personagem, combat_id_combat, player_id_player),
  INDEX character_FKIndex1(combat_id_combat),
  INDEX character_FKIndex2(player_id_player)
);

CREATE TABLE player (
  id_player INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  name_player VARCHAR(255) NULL,
  email_player VARCHAR(255) NULL,
  pass_player VARCHAR(255) NULL,
  PRIMARY KEY(id_player)
);

CREATE TABLE skill (
  id_skill INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  ability_id_ability INTEGER UNSIGNED NOT NULL,
  ability_personagem_id_personagem INTEGER UNSIGNED NOT NULL,
  ability_personagem_combat_id_combat INTEGER UNSIGNED NOT NULL,
  ability_personagem_player_id_player INTEGER UNSIGNED NOT NULL,
  name_skill VARCHAR(80) NULL,
  state_skill BOOL NULL,
  PRIMARY KEY(id_skill, ability_id_ability, ability_personagem_id_personagem, ability_personagem_combat_id_combat, ability_personagem_player_id_player),
  INDEX skill_FKIndex1(ability_id_ability, ability_personagem_player_id_player, ability_personagem_combat_id_combat, ability_personagem_id_personagem)
);

CREATE TABLE spell (
  id_spell INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  spellcast_id_spellcast INTEGER UNSIGNED NOT NULL,
  spellcast_personagem_id_personagem INTEGER UNSIGNED NOT NULL,
  spellcast_personagem_combat_id_combat INTEGER UNSIGNED NOT NULL,
  spellcast_personagem_player_id_player INTEGER UNSIGNED NOT NULL,
  level_spell INTEGER UNSIGNED NULL,
  name_spell VARCHAR(60) NULL,
  slots_max_spell INTEGER UNSIGNED NULL,
  slots_spell INTEGER UNSIGNED NULL,
  prepared_spell BOOL NULL,
  desc_spell TEXT NULL,
  PRIMARY KEY(id_spell, spellcast_id_spellcast, spellcast_personagem_id_personagem, spellcast_personagem_combat_id_combat, spellcast_personagem_player_id_player),
  INDEX spell_FKIndex1(spellcast_id_spellcast, spellcast_personagem_player_id_player, spellcast_personagem_combat_id_combat, spellcast_personagem_id_personagem)
);

CREATE TABLE spellcast (
  id_spellcast INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  personagem_player_id_player INTEGER UNSIGNED NOT NULL,
  personagem_combat_id_combat INTEGER UNSIGNED NOT NULL,
  personagem_id_personagem INTEGER UNSIGNED NOT NULL,
  class_spellcast VARCHAR(50) NULL,
  save_dc_spellcast INTEGER UNSIGNED NULL,
  atk_bonus_spellcast INTEGER UNSIGNED NULL,
  PRIMARY KEY(id_spellcast, personagem_player_id_player, personagem_combat_id_combat, personagem_id_personagem),
  INDEX spellcast_FKIndex1(personagem_combat_id_combat, personagem_player_id_player, personagem_id_personagem)
);


