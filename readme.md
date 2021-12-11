#### NATIONAL INSTITUTE OF TECHNOLOGY, HAMIRPUR

# DBMS PROJECT SUBMISSION

- Amish Ranpariya ( 195554 )
- Rohit Acharya ( 195555 )
- Mayur Kumar ( 195556 )
- Mohd Uvesh ( 195573 )
- Jatin Khatri ( 193092 )

Class: D (CSE-DUAL)

Subject: CS 315 (DBMS LAB)

Date: 20/11/21

## Project Overview

### Topic: Apartment Renting Management System

### Goals and Objectives:

1. To make renting management easier.
2. To create a reliable Web Application that connect user with database using delightful User Interface.
3. To make payment and invoice generation easy and reliable.

### Entities Overview:

- ADMIN: Is our application user, uses our application only after verifying his/her credentials (ID, password).

- OWNER: Is an owner of Whole Apartment/Apartments. And get money from tenants for Rent and Deposits.

- APARTMENT: Is a flat/building/maisonette/any entity containing multiple houses in it. Apartment is owned by Owner. e.g., XYZ society, ABC bungalows, KBH hostel.

- HOUSE: Is a liveable and rentable entity created by owner in his apartment. Tenants occupy these houses for their use and pay Rent and Deposit to Owner of house(apartment). E.g., E-510 Room in KBH apartment, Block no. 12 in XYZ society.

- TENANT: is a person who live in house and pay monthly rent to Owner. Tenant may have multiple houses.

### Entities Relationships:

1. Owner owns apartments. Apartment have only one owner.
2. Owner get paid by Tenants for the house which he/she owns.
3. Tenant can occupy multiple houses. But house can have only one tenant or may be vacant.
4. Apartment can have multiple houses in it. House can be in any one of the apartments.

#### Software Requirement Specification:

1. Admin can login/signup with credentials.
2. Admin can view all registered owners, tenants, apartments, houses.
3. Admin can see full details about owner. E.g., his personal detail, his apartments, total amount he/she gained from renting on our system.
4. Admin can see full details about tenants. E.g., his personal detail, occupied houses, total amount he/she paid for renting his houses.
5. Admin can see full details about apartments. E.g., apartment detail, houses it include, its owner’s details, list of tenants who lives in that apartment.
6. Admin can see full details about houses. E.g., house detail, its occupant detail, owner’s detail and apartment details in which it resides.
7. Admin can view full payment history of rent and deposits.
8. Admin can view all vacant house list.
9. Admin can view all occupied houses and its tenants list and date of assignment of house.
10. Admin can do some action like add owner in database, add tenant, add apartment, add house, vacate the house, place a tenant in house, generate payment receipt, generate monthly and yearly total calculation receipts.

## Project Demo

#### Sign Up page For New User/Admin

![](<image/Screenshot%20(76).png>)

#### Login Page For Existing User/Admin

![](<image/Screenshot%20(75).png>)

#### Homepage of Apartment Renting Management System (ARM System)

![](<image/Screenshot%20(42).png>)
Which Contains Information (Overview) of Database like No. of Registered Owners, No. of Registered Tenants, No. of Apartments, No. of Houses, No. of Payments.

#### Owners List

![](<image/Screenshot%20(43).png>)

#### Add Owner Form

![](<image/Screenshot%20(44).png>)

#### Owner’s Detailed Information with Payment Overview, Apartments Info and Payment Info.

![](<image/Screenshot%20(45).png>)
![](<image/Screenshot%20(46).png>)

#### Edit Owner Form.

![](<image/Screenshot%20(48).png>)

#### Tenants List

![](<image/Screenshot%20(49).png>)

<!-- #### Add Tenant Form. -->

<!-- ![](<image/Screenshot%20(50).png>) -->

#### Tenant’s Detailed Info with Payment Overview, Houses Occupation, Payment Info.

![](<image/Screenshot%20(51).png>)
![](<image/Screenshot%20(53).png>)

<!-- #### Edit Tenant Info Form. -->

<!-- ![](<image/Screenshot%20(54).png>) -->

#### Apartments List

![](<image/Screenshot%20(55).png>)

<!-- #### Add Apartment Form -->

<!-- ![](<image/Screenshot%20(56).png>) -->

#### Apartment’s Detailed Info and it’s Houses Info

![](<image/Screenshot%20(57).png>)
![](<image/Screenshot%20(59).png>)

<!-- #### Edit Apartment Details Form -->

<!-- ![](<image/Screenshot%20(58).png>) -->

#### All Houses List

![](<image/Screenshot%20(60).png>)

#### Vacant Houses List

![](<image/Screenshot%20(61).png>)

<!-- #### Occupied Houses List -->

<!-- ![](<image/Screenshot%20(62).png>) -->

<!-- #### Add House Form -->

<!-- ![](<image/Screenshot%20(63).png>) -->

#### Detailed House Information (occupied)

![](<image/Screenshot%20(64).png>)

#### Detailed House Information (Vacant)

![](<image/Screenshot%20(65).png>)

#### House Assignment Information with its payment history.

![](<image/Screenshot%20(66).png>)
![](<image/Screenshot%20(67).png>)

#### Assign House Form.

![](<image/Screenshot%20(69).png>)

#### Payments History

![](<image/Screenshot%20(70).png>)

#### Payment Invoice to print

![](<image/Screenshot%20(71).png>)

#### Demo Invoice

![](image/invoice.png)

#### House Rent Payment Form

![](<image/Screenshot%20(74).png>)
