CREATE TABLE clientes (
    id serial primary key,
    limite integer
);

INSERT INTO clientes (limite)
  VALUES
    (1000 * 100),
    (800 * 100),
    (10000 * 100),
    (100000 * 100),
    (5000 * 100);

CREATE TABLE transacoes (
    valor integer,
    tipo char,
    descricao varchar,
    cliente_id integer references clientes(id),
    realizada_em timestamp with time zone default now()
);

CREATE INDEX idx_cliente_id ON transacoes (cliente_id);