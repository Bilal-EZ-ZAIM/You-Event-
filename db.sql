CREATE TABLE Events (
    idEvent INT PRIMARY KEY,
    nameEvent VARCHAR(255),
    descriptionEvent TEXT,
    dateEvent DATE,
    locationEvent VARCHAR(255)
) ENGINE=INNODB;

CREATE TABLE Users (
    idUtilisateur INT PRIMARY KEY,
    nameUtilisateur VARCHAR(255),
    emailUtilisateur VARCHAR(255),
    passwords VARCHAR(255),
    roleUtilisateur VARCHAR(50) 
) ENGINE=INNODB;

CREATE TABLE Tickets (
    idTicket INT PRIMARY KEY,
    idEvent INT,
    typeTicket VARCHAR(50),
    priceTicket DECIMAL(10, 2),
    FOREIGN KEY (idEvent) REFERENCES Events(idEvent)
) ENGINE=INNODB;

CREATE TABLE Reservations (
    idReservation INT PRIMARY KEY,
    idUser INT,
    idEvent INT,
    idTicket INT,
    dateReservation DATE,
    NumberTickets INT,
    FOREIGN KEY (idUser) REFERENCES Users(idUser),
    FOREIGN KEY (idEvent) REFERENCES Events(idEvent),
    FOREIGN KEY (idTicket) REFERENCES Tickets(idTicket)
) ENGINE=INNODB;



CREATE TABLE Users (
    idUtilisateur INT PRIMARY KEY,
    nameUtilisateur VARCHAR(255),
    emailUtilisateur VARCHAR(255),
    passwords VARCHAR(255),
    roleUtilisateur VARCHAR(50) 
) ;
CREATE TABLE Events (
    idEvent INT PRIMARY KEY,
    nameEvent VARCHAR(255),
    descriptionEvent TEXT,
    dateEvent DATE,
    locationEvent VARCHAR(255),
    idU INT ,
    FOREIGN KEY (idU) REFERENCES Users(idUtilisateur)
) ;



CREATE TABLE Tickets (
    idTicket INT PRIMARY KEY,
    idEvent INT,
    typeTicket VARCHAR(50),
    priceTicket DECIMAL(10, 2),
    
    idU INT ,
    FOREIGN KEY (idEvent) REFERENCES Events(idEvent),
    FOREIGN KEY (idU) REFERENCES Users(idUtilisateur)
);

CREATE TABLE Reservations (
    idReservation INT PRIMARY KEY,
    idUser INT,
    idEvent INT,
    idTicket INT,
    dateReservation DATE,
    NumberTickets INT,
    FOREIGN KEY (idUser) REFERENCES Users(idUtilisateur),
    FOREIGN KEY (idEvent) REFERENCES Events(idEvent),
    FOREIGN KEY (idTicket) REFERENCES Tickets(idTicket)
) 