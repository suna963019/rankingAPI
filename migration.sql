CREATE TABLE tetris_scores (
    id integer PRIMARY KEY,
    name varchar,
    point integer,
    created_at timestamp,
    updated_at timestamp
);
CREATE TABLE slot_scores (
    id integer PRIMARY KEY,
    name varchar,
    point integer,
    created_at timestamp,
    updated_at timestamp
);
CREATE TABLE typing_scores (
    id integer PRIMARY KEY,
    name varchar,
    point integer,
    created_at timestamp,
    updated_at timestamp
);
CREATE TABLE brock_breaker_scores (
    id integer PRIMARY KEY,
    name varchar,
    point integer,
    created_at timestamp,
    updated_at timestamp
);