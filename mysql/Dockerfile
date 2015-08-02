FROM mysql

RUN mysql -u root <<-SQL
	GRANT ALL PRIVILEGES ON *.* TO 'root'@'%' WITH GRANT OPTION;
	CREATE DATAVASE project_b;
SQL
