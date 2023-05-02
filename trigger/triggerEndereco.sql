use prontuarioDigital;
drop trigger if exists `prontuarioDigital`.`criaLinhaEndereco`;

DELIMITER $$

create trigger criaLinhaEndereco after insert on usuario for each row
    
begin

	insert into endereco (idusuario,idtipoEndereco,idpaciente) values (new.idusuario,'1','1');
	
    	

end $$

DELIMITER ;


