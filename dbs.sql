USE dbs;

DROP TABLE IF EXISTS tblCustomer;
DROP TABLE IF EXISTS tblProduct;
DROP TABLE IF EXISTS tblOrder;

CREATE TABLE tblCustomer (
    fname VARCHAR(20),
    lname VARCHAR(20),
    email VARCHAR(255),
    password VARCHAR(42),
    houseNo VARCHAR(5),
    streetName VARCHAR(255),
    city VARCHAR(30),
    postCode VARCHAR(7),
    PRIMARY KEY(email)
);

CREATE TABLE tblProduct{
    pname VARCHAR(20),
    image VARCHAR(30),
    description VARCHAR(1000),
    price VARCHAR(10),
    PRIMARY KEY (pname)
};

INSERT INTO tblProduct VALUES
    ("Power Matt", "images/mat3.jpg", "The device itself will resemble a phone cover making it portable and not at all cumbersome. The two main parts of the product 
                will be a side covered in a solar panel array meant to capture the sunlight and one side featuring a converter. The converter side will both transform 
                the solar energy into energy the phone can use as well as delivering said energy to the phone battery. The solar panel array will be able to use light 
                both solar and artificial energy although the two will have different power outputs.", "15"),
    ("Carnegy", "images/car-battery.jpg", "This product gives our customers the ability to turn the kinetic energy from their wheels into electrical energy 
                for their cars. This is done by attaching dynamos to each wheel of the car and as the customers car wheels are spinning the dynamos will then 
                transform the AC current stored in the dynamos and convert them into DC alternative and store this energy in the car battery.", "35"),
    ("Tubed", "images/knife.png", "We have another future business idea called EnergyTube which involves generating energy by walking in and out of underground stations 
                during rush hour. In a underground station there will be kinetic pressured panels around the platforms and the tubes. We are currently working closely with
                 local administration offices in implementing a new system for all underground stations. It will be an attempt in harnessing some of the energy created by
                 people walking in and out of the stations especially in rush hours. It is currently a concept, but we are working on it.", "25"),
    ("Accessories", "images/accesories.jpg", "You will be able to get the phone covers in different colours and shape. You can personalise your phone cover by 
                adding images or text on them. With other products you can get cases in which they protect the product from any damages. Also, this can be in different 
                colours as well.", "7.50"),
    ("Technical assistance", "images/tech-support.jpg", "If you have any comments about our service and products, please write to our customer support team.
                Our customer service team is always willing to answer your proposal or concerns related to PowerBuddies and the products we offer. Your message will
                 be promptly handled under the direct supervision of our executive management.", "10");

CREATE TABLE tblOrder {
    orderid SMALLINT AUTO_INCREMENT,
    pname VARCHAR(20),
    email VARCHAR(255),
    qty SMALLINT,
    PRIMARY KEY(orderid),
    FOREIGN KEY(pname) REFERENCES tblProduct(pname),
    FOREGIN KEY(email) REFERENCES tblCustomer(email)
};