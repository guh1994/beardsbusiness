
DROP DATABASE IF EXISTS beardsbusiness;
CREATE DATABASE beardsbusiness;
USE beardsbusiness;

CREATE TABLE COMPANY (
CMP_ID INT PRIMARY KEY,
CMP_NAME VARCHAR(20),
CMP_CNPJ INT
);

CREATE TABLE ASSESSOR (
ASR_ID INT PRIMARY KEY,
ASR_NAME VARCHAR(100)
);

CREATE TABLE ESTEIRA (
EST_ID INT PRIMARY KEY,
EST_NAME VARCHAR(100)
);

CREATE TABLE CITY (
CTY_ID INT PRIMARY KEY,
CTY_NAME VARCHAR(100),
UF_ID INT
);

CREATE TABLE LOG (
LOG_ID INT PRIMARY KEY,
NEG_ID INT
);

CREATE TABLE CLIENT (
CLI_ID INT PRIMARY KEY,
CLI_NOME_MAE VARCHAR(50),
CLI_ESPECIE INT,
CLI_END_BAIRRO VARCHAR(100),
CLI_LOGRADOURO VARCHAR(100),
CLI_NUM_CEL NUMERIC(11),
CLI_CPF NUMERIC(11),
CLI_END_CEP CHAR(9),
CLI_NUM_TEL NUMERIC(11),
CLI_BENEFICIO NUMERIC(10),
CLI_NOME_PAI VARCHAR(50),
CLI_NAME VARCHAR(50),
CLI_END_NUM VARCHAR(20),
CTY_ID INT,
FOREIGN KEY(CTY_ID) REFERENCES CITY (CTY_ID)
);

CREATE TABLE UF (
UF_ID INT PRIMARY KEY,
UF_NAME VARCHAR(100)
);

CREATE TABLE USER (
USR_ID INT PRIMARY KEY,
USR_LOGIN VARCHAR(20),
USR_PASSWORD VARCHAR(50),
USR_NAME VARCHAR(100),
USR_PERMISSION INT,
CMP_ID INT,
FOREIGN KEY(CMP_ID) REFERENCES COMPANY (CMP_ID)
);

CREATE TABLE NEGOTIATION (
NEG_ID INT PRIMARY KEY,
NEG_TYPE VARCHAR(20),
NET_DATE DATETIME,
USR_ID INT,
EST_ID INT,
CLI_ID INT,
ASR_ID INT,
FOREIGN KEY(USR_ID) REFERENCES USER (USR_ID),
FOREIGN KEY(EST_ID) REFERENCES ESTEIRA (EST_ID),
FOREIGN KEY(CLI_ID) REFERENCES CLIENT (CLI_ID),
FOREIGN KEY(ASR_ID) REFERENCES ASSESSOR (ASR_ID)
)


ALTER TABLE LOG ADD FOREIGN KEY(NEG_ID) REFERENCES NEGOTIATION (NEG_ID);
ALTER TABLE CITY ADD FOREIGN KEY(UF_ID) REFERENCES UF (UF_ID);