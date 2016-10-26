CREATE TABLE jobs(
  job_id int(6) NOT NULL AUTO_INCREMENT,
  employer_id int(6) NOT NULL AUTO_INCREMENT,
  id int(6),
  job_title varchar(255) NOT NULL,
  job_full_content text NOT NULL,
  job_published_on date NOT NULL,
  job_price float NOT NULL,
  job_category varchar(255) NOT NULL,
  job_status varchar(25) DEFAULT 'Available',
  sname varchar(255) NOT NULL,
  CONSTRAINT primary key pk_job (job_id),
  CONSTRAINT foreign key fk1_job (id) references users(id),
  CONSTRAINT foreign key fk2_job (employer_id) references employer(employer_id),
  CONSTRAINT foreign key fk3_job (sname) references skills(sname)
)

CREATE TABLE employer(
  employer_id int(3) unsigned zerofill NOT NULL AUTO_INCREMENT,
  id int(6) NOT NULL,
  /* some extra attributes that employer have */
  join_date date NOT NULL,
  CONSTRAINT primary key pk_job (employer_id,id),
  CONSTRAINT foreign key fk1_job (id) references users(id)
)
select concat('LHPL', id) as id, name from so;
insert into employer(id,join_date)
values ('6','')

CREATE TABLE table1
(
  id VARCHAR(7) NOT NULL PRIMARY KEY DEFAULT '0', name VARCHAR(30)
);

INSERT INTO news
values (LOAD_FILE('http://ichef-1.bbci.co.uk/news/660/cpsprodpb/BE5C/production/_92023784_thinkstockphotos-482112104.jpg')),'1','Smart home devices used as weapon in website attack','Hackers used internet-connected home devices, such as CCTV cameras and printers, to attack popular websites on Friday, security analysts say','Hackers used internet-connected home devices, such as CCTV cameras and printers, to attack popular websites on Friday, security analysts say.
Twitter, Spotify, and Reddit were among the sites taken offline on Friday.
Each uses a company called Dyn, which was the target of the attack, to direct users to its website.
Security analysts now believe the attack used the "internet of things" - web-connected home devices - to launch the assault. Dyn is a DNS service - an internet "phone book" which directs users to the internet address where the website is stored. Such services are a crucial part of web infrastructure.
On Friday, it came under attack - a distributed denial of service (DDoS) - which relies on thousands of machines sending co-ordinated messages to overwhelm the service.
The "global event" involved "tens of millions" of internet addresses.
,Security firm Flashpoint said it had confirmed that the attack used "botnets" infected with the "Mirai" malware.
Many of the devices involved come from Chinese manufacturers, with easy-to-guess usernames and passwords that cannot be changed by the user - a vulnerability which the malware exploits.
"Mirai scours the Web for IoT (Internet of Things) devices protected by little more than factory-default usernames and passwords," explained cybersecurity expert Brian Krebs, "and then enlists the devices in attacks that hurl junk traffic at an online target until it can no longer accommodate legitimate visitors or users."
The owner of the device would generally have no way of knowing that it had been compromised to use in an attack, he wrote.
Mr Krebs is intimately familiar with this type of incident, after his website was targeted by a similar assault in September, in one of the biggest web attacks ever seen.', 'Julfikar', 11);


INSERT INTO news
values (LOAD_FILE('http://ichef-1.bbci.co.uk/news/660/cpsprodpb/BE5C/production/_92023784_thinkstockphotos-482112104.jpg')),'2',''Second life' for Indian baby girl left on the streets to die','What an abandoned baby girl reveals about India',An incubator in the nursery of India's premier medical institute in Delhi has been home to a tiny infant for the past few days.
She was brought into the trauma centre of the All India Institute of Medical Sciences (AIIMS) by the police in the early hours of last Wednesday.
When I walk in to the nursery, accompanied by her paediatrician Dr Jeeva Sankar, she is awake and fixes her eyes on me.
"This is our baby," the paediatrician says. A white band on her left wrist describes her as "unknown female".
A full-term healthy baby, her tiny face is perfectly formed and it is impossible to not fall in love with her. "She is beautiful," I say.
Veena Bahri, the head nurse, laughs: "Everyone says that." As we stand there chatting, the baby begins to bawl. She is hungry. A nurse picks her up, comforts her. She brings out a small steel cup with a long beak, fills it with milk and starts to feed her. The crying stops instantly.
With her belly full, she is calm again. Once she is put down on the bed, she rolls her left hand into a fist and sucks on her fingers. A few minutes later, she yawns. "She's going to sleep now," says Dr Jeeva Sankar.
While all the other babies in the nursery are being lovingly held by their parents, this one lies alone.
She came into the world unwanted and stares at an uncertain future.
We received an anonymous call just after 01:00 informing us that a baby was lying on the pavement in Munirka district of south Delhi. The person who called us had been alerted by the baby's crying, police official Somnath Paruthi told the BBC.
When police reached the spot, they found the infant inside a plastic bag, without any clothes, distressed and crying.', 'Julfikar', '10-JAN-2015');
