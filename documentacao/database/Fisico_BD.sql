/* Lógico_BD: */

CREATE TABLE Usuario (
    ID INTEGER PRIMARY KEY,
    nome VARCHAR(60),
    login VARCHAR(30),
    senha VARCHAR(30)
);

CREATE TABLE Disciplina (
    ID INTEGER PRIMARY KEY,
    nome VARCHAR(60),
    sigla VARCHAR(10)
);

CREATE TABLE Objeto3D (
    ID INTEGER PRIMARY KEY,
    nome VARCHAR(30),
    descricao VARCHAR(60),
    arquivoHash VARCHAR(32),
    caminho VARCHAR(100),
    tamanho_byte BYTE,
    extension VARCHAR(10)
);

CREATE TABLE Sala (
    ID INTEGER PRIMARY KEY,
    nome VARCHAR(60),
    codigo VARCHAR(30),
    fk_Usuario_ID INTEGER,
    fk_Disciplina_ID INTEGER,
    FOREIGN KEY (fk_Usuario_ID) REFERENCES Usuario (ID),
    FOREIGN KEY (fk_Disciplina_ID) REFERENCES Disciplina (ID)
);

CREATE TABLE sala_objeto (
    fk_Sala_ID INTEGER,
    fk_Objeto3D_ID INTEGER,
    FOREIGN KEY (fk_Sala_ID) REFERENCES Sala (ID),
    FOREIGN KEY (fk_Objeto3D_ID) REFERENCES Objeto3D (ID)
);

CREATE TABLE objeto_disciplina (
    fk_Disciplina_ID INTEGER,
    fk_Objeto3D_ID INTEGER,
    FOREIGN KEY (fk_Disciplina_ID) REFERENCES Disciplina (ID),
    FOREIGN KEY (fk_Objeto3D_ID) REFERENCES Objeto3D (ID)
    
);

CREATE TABLE participa (
    fk_Usuario_ID INTEGER,
    fk_Sala_ID INTEGER,
    FOREIGN KEY (fk_Usuario_ID) REFERENCES Usuario (ID),
    FOREIGN KEY (fk_Sala_ID) REFERENCES Sala (ID)  
);

