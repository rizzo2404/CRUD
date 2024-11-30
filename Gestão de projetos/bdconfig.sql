CREATE TABLE IF NOT EXISTS usuarios(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(45),
    email VARCHAR(45),
    senha VARCHAR(60),
    nivel ENUM('adm', 'colab') NOT NULL
);

CREATE TABLE IF NOT EXISTS projetos(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(45),
    descricao TEXT,
    data_inicio DATE,
    data_fim DATE
);
CREATE TABLE IF NOT EXISTS tarefas(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    id_projeto INT,
    titulo VARCHAR(45),
    descricao TEXT,
    status ENUM('pendente', 'em andamento', 'concluída') NOT NULL,
    data_inicio DATE,
    data_fim DATE,
    FOREIGN KEY(id_projeto) REFERENCES projetos(id)
);
CREATE TABLE IF NOT EXISTS membros_projetos (
    id_projeto INT,
    id_membro INT,
    PRIMARY KEY(id_projeto, id_membro),
    FOREIGN KEY(id_projeto) REFERENCES projetos(id),
    FOREIGN KEY(id_membro) REFERENCES usuarios(id)
);

