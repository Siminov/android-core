///
/// [SIMINOV FRAMEWORK]
/// Copyright [2015] [Siminov Software Solution LLP|support@siminov.com]
///
/// Licensed under the Apache License, Version 2.0 (the "License");
/// you may not use this file except in compliance with the License.
/// You may obtain a copy of the License at
///
///     http://www.apache.org/licenses/LICENSE-2.0
///
/// Unless required by applicable law or agreed to in writing, software
/// distributed under the License is distributed on an "AS IS" BASIS,
/// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
/// See the License for the specific language governing permissions and
/// limitations under the License.
///

/**
 * Exposes API's to provide condition on where clause to get tuples from table..
 */


#import <Foundation/Foundation.h>

@protocol SICISelect;

@protocol SICISelectClause <NSObject>

/**
 * Used to specify EQUAL TO (=) condition.
 * @param value Value for which EQUAL TO (=) condition will be applied.
 * @return SICISelect Interface.
 */
- (id<SICISelect>)equalTo:(id)value;

/**
 * Used to specify NOT EQUAL TO (!=) condition.
 * @param value Value for which NOT EQUAL TO (=) condition will be applied.
 * @return SICISelect Interface.
 */
- (id<SICISelect>)notEqualTo:(id)value;

/**
 * Used to specify GREATER THAN (>)condition.
 * @param value Value for while GREATER THAN (>)condition will be specified.
 * @return SICISelect Interface.
 */
- (id<SICISelect>)greaterThan:(id)value;

/**
 * Used to specify GREATER THAN EQUAL (>=) condition.
 * @param value Value for which GREATER THAN EQUAL (>=) condition will be specified.
 * @return SICISelect Interface.
 */
- (id<SICISelect>)greaterThanEqual:(id)value;

/**
 * Used to specify LESS THAN (<) condition.
 * @param value Value for which LESS THAN (<) condition will be specified.
 * @return SICISelect Interface.
 */
- (id<SICISelect>)lessThan:(id)value;

/**
 * Used to specify LESS THAN EQUAL (<=) condition.
 * @param value Value for which LESS THAN EQUAL (<=) condition will be specified.
 * @return SICISelect Interface.
 */
- (id<SICISelect>)lessThanEqual:(id)value;

/**
 * Used to specify BETWEEN condition.
 * @param start Start Range.
 * @param end End Range.
 * @return SICISelect Interface.
 */
- (id<SICISelect>)between:(id)start end:(id)end;

/**
 * Used to specify LIKE condition.
 * @param like LIKE condition.
 * @return SICISelect Interface.
 */
- (id<SICISelect>)like:(id)like;

/**
 * Used to specify IN condition.
 * @param values Values for IN condition.
 * @return SICISelect Interface.
 */
- (id<SICISelect>)in:(id)values;

@end
