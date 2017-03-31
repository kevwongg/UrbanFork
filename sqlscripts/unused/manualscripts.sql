CREATE TABLE `verifieduser` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `rname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE `admin_manages_restaurant` (
  `id` int(11) NOT NULL,
  `location` varchar(50) NOT NULL,
  `rname` varchar(50) NOT NULL,
  PRIMARY KEY (id, location, rname),
  FOREIGN KEY (id) REFERENCES admin(id),
  FOREIGN KEY (location, rname) REFERENCES restaurant(location, rname)
)

CREATE TABLE `menu` (
  `type` varchar(20) NOT NULL,
  `location` varchar(50) NOT NULL,
  `rname` varchar(50) NOT NULL,
  PRIMARY KEY (type, location, rname),
  FOREIGN KEY (location, rname) REFERENCES restaurant(location, rname)
);


CREATE TABLE `favourites` (
  `id` int(11) NOT NULL,
  `location` varchar(50) NOT NULL,
  `rname` varchar(50) NOT NULL,
  PRIMARY KEY (id, location, rname),
  FOREIGN KEY (location, rname) REFERENCES restaurant(location, rname)
);

CREATE TABLE `maintains` (
  `listid` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `location` varchar(50) NOT NULL,
  `rname` varchar(50) NOT NULL,
  PRIMARY KEY (listid, id, location, rname),
  FOREIGN KEY (listid) REFERENCES listoffavourites(listid),
  FOREIGN KEY (id, location, rname) REFERENCES favourites(id, location, rname)
);


CREATE TABLE `browses` (
  `id` int(11) NOT NULL,
  `location` varchar(50) NOT NULL,
  `rname` varchar(50) NOT NULL,
  PRIMARY KEY (id, location, rname),
  FOREIGN KEY (id) REFERENCES publicuser(id),
  FOREIGN KEY (location, rname) REFERENCES restaurant(location, rname)
);

CREATE TABLE `contains` (
  `dishid` int(11) NOT NULL,
  `location` varchar(50) NOT NULL,
  `rname` varchar(50) NOT NULL,
  `type` varchar(20) NOT NULL,
  PRIMARY KEY (dishid, location, rname, type),
  FOREIGN KEY (dishid) REFERENCES dishes(dishid),
  FOREIGN KEY (location, rname, type) REFERENCES menu(location, rname, type)
);
