CREATE DATABASE fullstackeletro;

USE fullstackeletro;

create table produtos (
id_produtos integer auto_increment not null,
descricao varchar(500),
preco decimal(8,2),
preco_venda decimal(8,2),
nome_imagem varchar(100),
categoria varchar(100),
primary key(id_produtos)
);

create table contato(
id_contato int auto_increment,
nome varchar(100),
msg varchar(500),
data_cadastro datetime default now(),
primary key (id_contato));


insert into produtos (descricao, preco, preco_venda, nome_imagem, categoria) 
values ("Geladeira Consul Frost Free Duplex 397 litros Evox com freezer embaixo", 3479.00, 2709.00,"./imagens/Consul_Geladeira_CRE44AK_Imagem_Frontal_1.jpg","geladeira");

insert into produtos (descricao, preco, preco_venda, nome_imagem, categoria) 
values ("Geladeira Brastemp Frost Free Duplex 375 litros cor Inox com Espaço Adapt", 3479.00, 2249.10,"./imagens/Brastemp_Geladeira_BRM45HK_Imagem_Frontal_1600x1400.jpg","geladeira");

insert into produtos (descricao, preco, preco_venda, nome_imagem, categoria) 
values ("Fogão de Piso Brastemp de 05 Bocas com Duplo Forno e Painel Touch Inox",4239.00 ,3932.00 ,"./imagens/BRBFD5VCR_PRD_447_1.jpg","fogao");

insert into produtos (descricao, preco, preco_venda, nome_imagem, categoria) 
values ("Forno de Micro-ondas Electrolux ME41X com Painel Blue Touch 31 Litros",1259.00 ,999.00 ,"./imagens/forno-de-micro-ondas-31l-electrolux-me41x_211417_7.jpg","microondas");

insert into produtos (descricao, preco, preco_venda, nome_imagem, categoria) 
values ("Refrigerador Brastemp BRM44HB Frost Free com Compartimento para Latas e Long Necks Branco - 375L", 2499.00,2089.05 ,"./imagens/Geladeira Brastemp Frost Free Duplex BRM44HB 375L Branco.jpg","geladeira");

insert into produtos (descricao, preco, preco_venda, nome_imagem, categoria) 
values ("Lava-Louças Electrolux LV14X 14Serviços com Display Digital - Inox",4349.00 ,3914.10 ,"./imagens/lava-loucas-14-servicos-electrolux-lv14x-inox-photo892601426-12-2c-17.jpg","lavaloucas");

insert into produtos (descricao, preco, preco_venda, nome_imagem, categoria) 
values ("Lava Louças 8 Serviços 220V Cinza Brastemp", 2129.00,2063.00 ,"./imagens/lava_loucas_febe_300x300.jpg","lavaloucas");

insert into produtos (descricao, preco, preco_venda, nome_imagem, categoria) 
values ("Lavadora de Roupas LG Smart VC4 FV5011WG4A - 11Kg Cesto Inox 14 Programas de Lavagem", 3599.00, 2825.10,"./imagens/Lavadora de Roupas LG Vivace VC4 11kg Branca.jpg","lavaroupas");

insert into produtos (descricao, preco, preco_venda, nome_imagem, categoria) 
values ("Lava e Seca Samsung WD4000 com Ecobubble™, 11kg, Inox - WD11M4453JXFAZ 220V", 4499.00, 3599.10,"./imagens/lavadora-e-secadora-de-roupas-samsung-11kg-air-wash-e-ecobubble-branca.jpg","lavaroupas");

insert into produtos (descricao, preco, preco_venda, nome_imagem, categoria) 
values ("Fogão de Piso Electrolux de 05 Bocas com Mesa de Vidro e Tripla Chama Prata - 76USV", 2849.00, 2149.00,"./imagens/Range_76USV_Front_View_Electrolux_1000x1000.jpg","fogao");
